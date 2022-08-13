<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWeekRequest;
use App\Http\Requests\UpdateWeekRequest;
use App\Models\Week;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class WeekController extends Controller
{
    public function index() : View
    {
        $weeks = Week::all('id', 'name', 'start_at', 'is_active', 'max_picks');

        return view('admin.weeks.index', compact('weeks'));
    }

    public function create() : View
    {
        return view('admin.weeks.create');
    }

    public function store(StoreWeekRequest $request)
    {
        Week::create($request->validated());

        return redirect()->route('admin.weeks.index');
    }

    public function edit(Week $week) : View
    {
        return view('admin.weeks.edit', ['week' => $week]);
    }

    public function update(UpdateWeekRequest $request, Week $week)
    {
        $week->update($request->validated());

        return redirect()->route('admin.weeks.index');
    }

    public function destroy(Week $week) : RedirectResponse
    {
        $week->delete();

        return redirect()->route('admin.weeks.index');
    }
}
