<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WeekSeeder extends Seeder
{
    public function run()
    {
        DB::table('weeks')->insert(['name' => 'Week 1', 'start_at' => '2022-08-26 00:00:00', 'is_active' => 0, 'created_at' => NOW(), 'updated_at' => NOW(), ]);
        DB::table('weeks')->insert(['name' => 'Week 2', 'start_at' => '2022-09-07 00:00:00', 'is_active' => 0, 'created_at' => NOW(), 'updated_at' => NOW(), ]);
        DB::table('weeks')->insert(['name' => 'Week 3', 'start_at' => '2022-09-14 00:00:00', 'is_active' => 0, 'created_at' => NOW(), 'updated_at' => NOW(), ]);
        DB::table('weeks')->insert(['name' => 'Week 4', 'start_at' => '2022-09-21 00:00:00', 'is_active' => 0, 'created_at' => NOW(), 'updated_at' => NOW(), ]);
        DB::table('weeks')->insert(['name' => 'Week 5', 'start_at' => '2022-09-28 00:00:00', 'is_active' => 0, 'created_at' => NOW(), 'updated_at' => NOW(), ]);
        DB::table('weeks')->insert(['name' => 'Week 6', 'start_at' => '2022-10-05 00:00:00', 'is_active' => 0, 'created_at' => NOW(), 'updated_at' => NOW(), ]);
        DB::table('weeks')->insert(['name' => 'Week 7', 'start_at' => '2022-10-12 00:00:00', 'is_active' => 0, 'created_at' => NOW(), 'updated_at' => NOW(), ]);
        DB::table('weeks')->insert(['name' => 'Week 8', 'start_at' => '2022-10-19 00:00:00', 'is_active' => 0, 'created_at' => NOW(), 'updated_at' => NOW(), ]);
        DB::table('weeks')->insert(['name' => 'Week 9', 'start_at' => '2022-10-26 00:00:00', 'is_active' => 0, 'created_at' => NOW(), 'updated_at' => NOW(), ]);
        DB::table('weeks')->insert(['name' => 'Week 10', 'start_at' => '2022-11-02 00:00:00', 'is_active' => 0, 'created_at' => NOW(), 'updated_at' => NOW(), ]);
        DB::table('weeks')->insert(['name' => 'Week 11', 'start_at' => '2022-11-09 00:00:00', 'is_active' => 0, 'created_at' => NOW(), 'updated_at' => NOW(), ]);
        DB::table('weeks')->insert(['name' => 'Week 12', 'start_at' => '2022-11-16 00:00:00', 'is_active' => 0, 'created_at' => NOW(), 'updated_at' => NOW(), ]);
        DB::table('weeks')->insert(['name' => 'Week 13', 'start_at' => '2022-11-23 00:00:00', 'is_active' => 0, 'created_at' => NOW(), 'updated_at' => NOW(), ]);
        DB::table('weeks')->insert(['name' => 'Week 14', 'start_at' => '2022-11-30 00:00:00', 'is_active' => 0, 'created_at' => NOW(), 'updated_at' => NOW(), ]);
        DB::table('weeks')->insert(['name' => 'Week 15', 'start_at' => '2022-12-07 00:00:00', 'is_active' => 0, 'created_at' => NOW(), 'updated_at' => NOW(), ]);
        DB::table('weeks')->insert(['name' => 'Week 16', 'start_at' => '2022-12-14 00:00:00', 'is_active' => 0, 'created_at' => NOW(), 'updated_at' => NOW(), ]);
        DB::table('weeks')->insert(['name' => 'Week 17', 'start_at' => '2022-12-21 00:00:00', 'is_active' => 0, 'created_at' => NOW(), 'updated_at' => NOW(), ]);
        DB::table('weeks')->insert(['name' => 'Week 18', 'start_at' => '2022-12-28 00:00:00', 'is_active' => 0, 'max_picks' => 10, 'created_at' => NOW(), 'updated_at' => NOW(), ]);
    }
}
