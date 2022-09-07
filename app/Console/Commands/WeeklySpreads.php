<?php

namespace App\Console\Commands;

use App\Models\Game;
use App\Models\Team;
use App\Models\Week;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class WeeklySpreads extends Command
{
    protected $signature = 'spreads:weekly';

    protected $description = 'Pull weekly spreads via API';

    public function handle() : void
    {
        $weeks = Week::query()->get(['id', 'start_at', 'is_active']);

        foreach ($weeks as $week) {
            if (Carbon::now()->toDateString() == Carbon::create($week->start_at)->toDateString()) {
                Week::query()->where('id', $week->id)->update(['is_active' => true]);
                break;
            } elseif ($week->is_active) {
                Week::query()->where('id', $week->id)->update(['is_active' => false]);
            }
        }

        $sports = ['americanfootball_ncaaf', 'americanfootball_nfl'];
        $current_week = Week::query()->where('is_active', true)->value('id');

        Log::channel('spreads')->info('======== WEEK ========');
        Log::channel('spreads')->info('Current Week: week '.$current_week);
        Log::channel('spreads')->info('======================');

        foreach ($sports as $sport) {
            $response = Http::get('https://api.the-odds-api.com/v4/sports/'.$sport.'/odds/?apiKey=e477ff82aaf4aa4f705720b0f55930df&regions=us&markets=spreads');
            $collection = collect(json_decode($response, true));

            for ($i = 0; $i < $collection->count(); $i++) {
                $home_team = trim($collection->pluck('home_team')[$i]);
                $away_team = trim($collection->pluck('away_team')[$i]);
                $start = Carbon::parse(trim($collection->pluck('commence_time')[$i]))->setTimezone('America/New_York')->format('Y:m:d H:i:s');
                $end_date = Carbon::create(Week::where('is_active', true)->value('start_at'))->addDays(6)->toDateString();

                $odds = 0;
                $stop = true;
                $home_spreads = collect([]);

                if ($home_team == $collection->pluck('bookmakers.0.markets.0.outcomes.0.name')[$i]) {
                    do {
                        $home_spreads->push($collection->pluck('bookmakers.' . $odds . '.markets.0.outcomes.0.point')[$i]);
                        $odds++;
                        if ($collection->pluck('bookmakers.' . $odds . '.markets.0.outcomes.0.point')[$i] == null) {
                            $stop = false;
                        }
                    } while ($stop);

                } else {
                    do {
                        $home_spreads->push($collection->pluck('bookmakers.' . $odds . '.markets.0.outcomes.1.point')[$i]);
                        $odds++;
                        if ($collection->pluck('bookmakers.' . $odds . '.markets.0.outcomes.1.point')[$i] == null) {
                            $stop = false;
                        }
                    } while ($stop);

                }
                $home_spread = trim($home_spreads->max());

                if ($home_team == null
                    or $away_team == null
                    or $home_spread == null
                    or Team::query()->where('name', $home_team)->value('id') == null
                    or Team::query()->where('name', $away_team)->value('id') == null
                    or Game::query()->where('start_at', $start)->where('home_team_id', Team::query()->where('name', $home_team)->value('id'))->first()
                    or Carbon::create($start) >= Carbon::create($end_date)) {
                    continue;
                }

                Log::channel('spreads')->info('Game DateTime: '.$start);
                Log::channel('spreads')->info('Week End Date: '.$end_date);
                Log::channel('spreads')->info('Home Team: ('.Team::query()->where('name', $home_team)->value('name').') '.$home_team.' ['.$home_spread.']');
                Log::channel('spreads')->info('Away Team: ('.Team::query()->where('name', $away_team)->value('name').') '.$away_team.' ['.-$home_spread.']');
                Log::channel('spreads')->info(' ');

                if ($home_spread / 1 - floor($home_spread / 1) > 0) {
                    if ($home_spread < 0) {
                        $home_spread = $home_spread - 0.5;
                    } else {
                        $home_spread += 0.5;
                    }
                }

                $game = new Game();
                $game->week_id = $current_week;
                $game->start_at = $start;
                $game->home_team_id = Team::query()->where('name', $home_team)->value('id');
                $game->home_spread = $home_spread;
                $game->away_team_id = Team::query()->where('name', $away_team)->value('id');
                $game->away_spread = -$home_spread;
                $game->save();
            }
        }
    }
}
