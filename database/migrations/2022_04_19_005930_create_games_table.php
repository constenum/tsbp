<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up() : void
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->foreignId('week_id')->constrained('weeks');
            $table->dateTime('start_at');
            $table->foreignId('home_team_id')->constrained('teams');
            $table->decimal('home_spread', 3, 1)->nullable();
            $table->unsignedSmallInteger('home_score')->nullable();
            $table->foreignId('away_team_id')->constrained('teams');
            $table->decimal('away_spread', 3, 1)->nullable();
            $table->unsignedSmallInteger('away_score')->nullable();
            $table->string('status')->default('Not Started');
            $table->timestamps();
        });
    }
};
