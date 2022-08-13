<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Team extends Model
{
    protected $fillable = [
        'name',
        'short_name',
        'league',
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
