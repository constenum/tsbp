<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Game extends Model
{
    protected $fillable = [
        'week_id',
        'start_at',
        'home_team_id',
        'home_spread',
        'home_score',
        'away_team_id',
        'away_spread',
        'away_score',
        'status',
    ];

    protected $casts = [
        'start_at' => 'datetime',
    ];

    public function week(): BelongsTo
    {
        return $this->belongsTo(Week::class);
    }

    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    public function home_team(): BelongsTo
    {
        return $this->belongsTo(Team::class, 'home_team_id');
    }

    public function away_team(): BelongsTo
    {
        return $this->belongsTo(Team::class, 'away_team_id');
    }

    public function pick(): BelongsTo
    {
        return $this->belongsTo(Pick::class);
    }
}
