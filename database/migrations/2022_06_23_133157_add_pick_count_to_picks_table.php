<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up() : void
    {
        Schema::table('picks', function (Blueprint $table) {
            $table->smallInteger('pick_count');
        });
    }
};
