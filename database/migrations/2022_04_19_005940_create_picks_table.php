<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up() : void
    {
        Schema::create('picks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('week_id')->constrained();
            $table->json('picks');
            $table->smallInteger('pick_count')->default(0);
            $table->smallInteger('wins')->default(0);
            $table->smallInteger('losses')->default(0);
            $table->timestamps();
        });
    }
};
