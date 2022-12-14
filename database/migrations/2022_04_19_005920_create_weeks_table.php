<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up() : void
    {
        Schema::create('weeks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->datetime('start_at');
            $table->boolean('is_active')->default(false);
            $table->smallInteger('max_picks')->default(5);
            $table->timestamps();
        });
    }
};
