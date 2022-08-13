<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pick extends Model
{
    protected $fillable = [
        'user_id',
        'week_id',
        'picks',
        'pick_count',
        'wins',
        'losses',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function week(): BelongsTo
    {
        return $this->belongsTo(Week::class);
    }

    public function game(): HasMany
    {
        return $this->hasMany(Game::class);
    }
}
