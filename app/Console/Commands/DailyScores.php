<?php

namespace App\Console\Commands;

use App\Models\Game;
use App\Models\Pick;
use App\Models\Team;
use App\Models\Week;
use DOMDocument;
use DOMXPath;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class DailyScores extends Command
{
    protected $signature = 'scores:daily';

    protected $description = 'Scrape the game scores daily - every minute';

    public function handle(): void
    {
        $current_week = Week::where('is_active', true)->value('id');

        $ncaaf = [];
        $ncaafPage = file_get_contents("https://www.thescore.com/ncaaf/events/conference/All%20FBS");
//        $ncaafPage = file_get_contents("https://www.thescore.com/ncaaf/events/conference/All%20FBS/date/2022-".$current_week);
        $ncaafDoc = new DOMDocument();
        libxml_use_internal_errors(true);
        $ncaafDoc->loadHTML($ncaafPage);
        libxml_use_internal_errors(false);
        $ncaafXpath = new DomXPath($ncaafDoc);
        $ncaafQuery = $ncaafXpath->query('//div[contains(@class, "EventCard__teamName--JweK5") or contains(@class, "EventCard__pregameScoreText--ow7eN") or contains(@class, "EventCard__score--2C1-p") or contains(@class, "EventCard__clockColumn--3lEPz")]');

        for($i=0;$i<$ncaafQuery->length;$i++) {
            if(str_starts_with($ncaafQuery->item($i)->nodeValue, "(")) {
                continue;
            }
            $ncaaf[$i] = $ncaafQuery->item($i)->nodeValue;
        }

        $nfl = [];
        $nflPage = file_get_contents("https://www.thescore.com/nfl/events");
//        $nflPage = file_get_contents("https://www.thescore.com/nfl/events/date/2022-".$current_week+1);
        $nflDoc = new DOMDocument();
        libxml_use_internal_errors(true);
        $nflDoc->loadHTML($nflPage);
        libxml_use_internal_errors(false);
        $nflXpath = new DomXPath($nflDoc);
        $nflQuery = $nflXpath->query('//div[contains(@class, "EventCard__teamName--JweK5") or contains(@class, "EventCard__pregameScoreText--ow7eN") or contains(@class, "EventCard__score--2C1-p") or contains(@class, "EventCard__clockColumn--3lEPz")]');

        for($i=0;$i<$nflQuery->length;$i++) {
            $nfl[$i] = $nflQuery->item($i)->nodeValue;
        }

        $scores = array_merge($ncaaf, $nfl);

        for ($i = 0; $i < count($scores); $i += 5) {

            $visitor = Team::where('short_name', $scores[$i])->value('id');

            $game = Game::where('away_team_id', $visitor)->where('week_id', $current_week)->get();

            if ($game->isEmpty()) {
                continue;
            }

            $game_id = $game[0]['id'];

            if (str_starts_with($scores[$i + 1], "-") or str_starts_with($scores[$i + 1], "T") or str_starts_with($scores[$i + 1], "N") or str_starts_with($scores[$i + 1], "p") or $scores[$i + 1] == null) {
                $status = "Not Started";
            } else {
                $status = $scores[$i + 2];
            }

            if ($status != "Not Started" and !Game::where('id', $game_id)->value('is_complete')) {
                Game::query()
                    ->where('id', $game_id)
                    ->update([
                        'home_score' => $scores[$i + 4],
                        'away_score' => $scores[$i + 1],
                        'status' => $status,
                    ]);
            }

            if (str_starts_with($scores[$i + 2], "Final") and !Game::where('id', $game_id)->value('is_complete')) {
                $completed_game = Game::query()
                    ->where('id', $game_id)
                    ->get([
                        'id',
                        'home_team_id',
                        'home_score',
                        'home_spread',
                        'away_team_id',
                        'away_score',
                        'away_spread'
                    ]);

                $winner = null;
                $loser = null;
                $loser2 = null;

                Log::info('Winner before if statement: '.$winner);
                Log::info('Loser before if statement: '.$loser);
                Log::info('Loser2 before if statement: '.$loser2);

                if ($completed_game->value('home_score') + $completed_game->value('home_spread') - $completed_game->value('away_score') > 0) {
                    $winner = $completed_game->value('home_team_id');
                    $loser = $completed_game->value('away_team_id');

                    Log::info('Winner in if statement: '.$winner);
                    Log::info('Loser in if statement: '.$loser);
                }
                if ($completed_game->value('away_score') + $completed_game->value('away_spread') - $completed_game->value('home_score') > 0) {
                    $winner = $completed_game->value('away_team_id');
                    $loser = $completed_game->value('home_team_id');

                    Log::info('Winner in if statement: '.$winner);
                    Log::info('Loser in if statement: '.$loser);
                }
                if ($completed_game->value('away_score') + $completed_game->value('away_spread') - $completed_game->value('home_score') == 0) {
                    $loser = $completed_game->value('home_team_id');
                    $loser2 = $completed_game->value('away_team_id');

                    Log::info('Loser in if statement: '.$loser);
                    Log::info('Loser2 in if statement: '.$loser2);
                }

                Log::info('Winner outside if statement: '.$winner);
                Log::info('Loser outside if statement: '.$loser);
                Log::info('Loser2 outside if statement: '.$loser2);

                $record_wins_losses = Pick::where('week_id', $current_week)->get();

                foreach ($record_wins_losses as $wins_loss) {
                    foreach (json_decode($wins_loss->picks, true) as $value) {
                        if ($winner == $value) {
                            Pick::query()
                                ->where('week_id', $current_week)
                                ->where('user_id', $wins_loss->user_id)
                                ->update([
                                    'wins' => DB::raw('wins+1')
                                ]);
                        } elseif ($loser == $value) {
                            Pick::query()
                                ->where('week_id', $current_week)
                                ->where('user_id', $wins_loss->user_id)
                                ->update([
                                    'losses' => DB::raw('losses+1')
                                ]);
                        } elseif ($loser2 == $value) {
                            Pick::query()
                                ->where('week_id', $current_week)
                                ->where('user_id', $wins_loss->user_id)
                                ->update([
                                    'losses' => DB::raw('losses+1')
                                ]);
                        }
                    }
                }

                Game::where('id', $game_id)->update(['is_complete' => true,]);
            }
        }
    }
}
