<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePickRequest;
use App\Models\Game;
use App\Models\Pick;
use App\Models\Week;
use Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PickController extends Controller
{
    public function index() : View
    {
        $week = Week::query()->where('is_active', true)->value('id');
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

        return view('picks.index', compact('week', 'max_picks', 'games', 'picks'));
    }

    public function store(StorePickRequest $request) : RedirectResponse
    {
        $data = $request->except('_token');
        $picks = [];
        foreach ($data as $key => $value) {
            if (str_starts_with($key, 'game')) {
                $picks[str_replace("game","",$key)] = $value;
            }
        }

        $existing_picks = Pick::query()->where('user_id', Auth::user()->id)->where('week_id', $request->week_id)->first();

        if ($existing_picks != null) {
            $existing_picks->update([
                'user_id' => $request->user_id,
                'week_id' => $request->week_id,
                'pick_count' => $request->pick_count,
                'picks' => json_encode($picks),
            ]);
        } else {
            Pick::create([
                'user_id' => $request->user_id,
                'week_id' => $request->week_id,
                'pick_count' => $request->pick_count,
                'picks' => json_encode($picks),
            ]);
        }

        session()->flash('success', 'Your picks have been saved!');

        return redirect()->route('picks.index');
    }
}
