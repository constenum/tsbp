<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run() : Void
    {
//        User::factory(1)->admin()->create();
//        User::factory(3)->create();
        $this->call([
            UserSeeder::class,
           TeamSeeder::class,
           WeekSeeder::class,
        ]);
    }
}
