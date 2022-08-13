<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Week extends Model
{
    protected $fillable = [
        'name',
        'start_at',
        'is_active',
        'max_picks',
    ];

    protected $casts = [
        'start_at' => 'datetime',
    ];

    public function games(): HasMany
    {
        return $this->hasMany(Game::class);
    }

    public function picks(): HasMany
    {
        return $this->hasMany(Pick::class);
    }
}
