<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePickRequest;
use App\Models\Game;
use App\Models\Pick;
use App\Models\Week;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class PickController extends Controller
{
    public function index() : View
    {
        $week = Week::query()->where('is_active', true)->value('id');
        $reveal_picks = Carbon::create(Week::query()->where('is_active', true)->value('start_at'))->addDays(3)->addHours(12);
        $max_picks = Week::query()->where('is_active', true)->value('max_picks');

        $games = Game::with(['home_team', 'away_team'])->whereHas('week', function ($query) {
            $query->where('is_active', true);
        })->orderBy('start_at')->get();

        $picks = [];
        $json = json_decode(Pick::where('user_id', Auth::id())->where('week_id', $week)->value('picks'));

        if ($json != null) {
            foreach ($json as $value) {
                $picks[] = $value;
            }
        }

        return view('picks.index', compact('week', 'reveal_picks', 'max_picks', 'games', 'picks'));
    }

    public function store(StorePickRequest $request) : RedirectResponse
    {
        $week = Week::query()->where('is_active', true)->value('id');
        $data = $request->except('_token');
        $picks = [];

        foreach ($data as $key => $value) {
            if (str_starts_with($key, 'game')) {
                $picks[str_replace("game","",$key)] = $value;
            }
        }

//        $existing_picks = Pick::query()->where('user_id', Auth::user()->id)->where('week_id', $request->week_id)->first();
//
////        if ($existing_picks != null) {
////            $existing_picks->update([
////                'pick_count' => $request->pick_count,
////                'picks' => json_encode($picks),
////            ]);
////        } else {
////            Pick::create([
////                'user_id' => $request->user_id,
////                'week_id' => $request->week_id,
////                'pick_count' => $request->pick_count,
////                'picks' => json_encode($picks),
////            ]);
////        }

        Pick::updateOrCreate(
            ['user_id' => $request->user_id, 'week_id' => $request->week_id],
            ['pick_count' => $request->pick_count, 'picks' => json_encode($picks),]
        );

        Log::channel('picks')->info('Current Week: week '.$week);
        Log::channel('picks')->info('DateTime: '.Carbon::now());
        Log::channel('picks')->info('User ID: '.$request->user_id);
        Log::channel('picks')->info('Picks: '.json_encode($picks));
        Log::channel('picks')->info(' ');

        session()->flash('success', 'Your picks have been saved!');

        return redirect()->route('picks.index');
    }
}
