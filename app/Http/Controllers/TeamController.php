<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use App\Models\Team;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TeamController extends Controller
{
    public function index() : View
    {
        $teams = Team::orderBy('league')->orderBy('name')->get(['id', 'name', 'short_name', 'league']);

        return view('admin.teams.index', compact('teams'));
    }

    public function create() : View
    {
        return view('admin.teams.create');
    }

    public function store(StoreTeamRequest $request) : RedirectResponse
    {
        Team::create($request->validated());

        return redirect()->route('teams.index');
    }

    public function edit(Team $team) : View
    {
        return view('admin.teams.edit', compact('team'));
    }

    public function update(UpdateTeamRequest $request, Team $team) : RedirectResponse
    {
        $team->update($request->validated());

        return redirect()->route('teams.index');
    }

    public function destroy(Team $team) : RedirectResponse
    {
        $team->delete();

        return redirect()->route('teams.index');
    }
}
