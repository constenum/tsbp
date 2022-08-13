<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGameRequest;
use App\Http\Requests\UpdateGameRequest;
use App\Models\Game;
use App\Models\Week;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class GameController extends Controller
{
    public function index() : View
    {
        $current_week = Week::where('is_active', true)->value('id');
        $games = Game::with(['home_team', 'away_team'])
            ->where('week_id', $current_week)
            ->orderBy('start_at')
            ->get(['id', 'start_at', 'home_team_id', 'home_spread', 'home_score', 'away_team_id', 'away_score', 'away_spread', 'status',]);

        return view('admin.games.index', compact('games', 'current_week'));
    }

    public function create() : View
    {
        return view('admin.games.create');
    }

    public function store(StoreGameRequest $request) : RedirectResponse
    {
        Game::create($request->validated());

        return redirect()->route('admin.games.index');
    }

    public function edit(Game $game) : View
    {
        return view('admin.games.edit', compact('game'));
    }

    public function update(UpdateGameRequest $request, Game $game) : RedirectResponse
    {
        $game->update($request->validated());

        return redirect()->route('admin.games.index');
    }

    public function destroy(Game $game) : RedirectResponse
    {
        $game->delete();

        return redirect()->route('admin.games.index');
    }
}
