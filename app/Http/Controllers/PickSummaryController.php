<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Pick;
use App\Models\User;
use App\Models\Week;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class PickSummaryController extends Controller
{
    public function current() : View
    {
        $week = Week::query()->where('is_active', true)->value('id');
        $reveal_picks = Carbon::create(Week::query()->where('is_active', true)->value('start_at'))->addDays(3)->addHours(12);
        $max_picks = Week::query()->where('is_active', true)->value('max_picks');
//        $picks = Pick::with('user')->orderBy(User::select('name')->whereColumn('users.id', 'picks.user_id'))->where('week_id', $week)->get();
        $picks = DB::table('picks')->select('user_id', 'week_id', 'picks', 'pick_count', 'wins', 'losses')->where('week_id', $week);
        $users = DB::table('users')->where('is_active', true)->leftJoinSub($picks, 'picks', function ($join){$join->on('users.id', '=', 'picks.user_id');})->orderBy('name')->get();
        $users_picks = $users->toArray();
        return view('current', compact('week', 'reveal_picks', 'max_picks', 'users_picks'));
    }

    public function weekly() : View
    {
        $week = Week::query()->where('is_active', true)->value('id');

        $weekly_wins_losses = Pick::with('user')
            ->join('users', 'picks.user_id', '=', 'users.id')
            ->orderBy('users.name')
            ->orderBy('week_id')
            ->get(['user_id', 'week_id', 'wins', 'losses'])
            ->groupBy('user.name')
            ->toArray();

        return view('weekly', compact('week', 'weekly_wins_losses'));
    }
    public function overall() : View
    {
        $week = Week::query()->where('is_active', true)->value('id');

        $total_wins_losses = DB::table('picks')
            ->join('users', 'picks.user_id', '=', 'users.id')
            ->select('user_id', 'name', DB::raw('SUM(wins) As total_wins'), DB::raw('SUM(losses) as total_losses'), 'winnings')
            ->groupBy('picks.user_id', 'users.name')
            ->orderBy('total_wins', 'desc')
            ->orderBy('users.name')
            ->get();

        return view('overall', compact('week',  'total_wins_losses'));
    }
}
