<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WeekSeeder extends Seeder
{
    public function run()
    {
        DB::table('weeks')->insert(['name' => 'Week 1', 'start_at' => '2022-07-25 00:00:00', 'is_active' => 0, 'max_picks' => 5, 'created_at' => NOW(), 'updated_at' => NOW(), ]);
        DB::table('weeks')->insert(['name' => 'Week 2', 'start_at' => '2022-07-26 00:00:00', 'is_active' => 0, 'max_picks' => 5, 'created_at' => NOW(), 'updated_at' => NOW(), ]);
        DB::table('weeks')->insert(['name' => 'Week 3', 'start_at' => '2022-07-27 00:00:00', 'is_active' => 0, 'max_picks' => 5, 'created_at' => NOW(), 'updated_at' => NOW(), ]);
        DB::table('weeks')->insert(['name' => 'Week 4', 'start_at' => '2022-07-28 00:00:00', 'is_active' => 0, 'max_picks' => 5, 'created_at' => NOW(), 'updated_at' => NOW(), ]);
        DB::table('weeks')->insert(['name' => 'Week 5', 'start_at' => '2022-07-29 00:00:00', 'is_active' => 0, 'max_picks' => 5, 'created_at' => NOW(), 'updated_at' => NOW(), ]);
        DB::table('weeks')->insert(['name' => 'Week 6', 'start_at' => '2022-07-30 00:00:00', 'is_active' => 0, 'max_picks' => 5, 'created_at' => NOW(), 'updated_at' => NOW(), ]);
        DB::table('weeks')->insert(['name' => 'Week 7', 'start_at' => '2022-07-31 00:00:00', 'is_active' => 0, 'max_picks' => 5, 'created_at' => NOW(), 'updated_at' => NOW(), ]);
        DB::table('weeks')->insert(['name' => 'Week 8', 'start_at' => '2022-08-01 00:00:00', 'is_active' => 0, 'max_picks' => 5, 'created_at' => NOW(), 'updated_at' => NOW(), ]);
        DB::table('weeks')->insert(['name' => 'Week 9', 'start_at' => '2022-08-02 00:00:00', 'is_active' => 0, 'max_picks' => 5, 'created_at' => NOW(), 'updated_at' => NOW(), ]);
        DB::table('weeks')->insert(['name' => 'Week 10', 'start_at' => '2022-08-03 00:00:00', 'is_active' => 0, 'max_picks' => 5, 'created_at' => NOW(), 'updated_at' => NOW(), ]);
        DB::table('weeks')->insert(['name' => 'Week 11', 'start_at' => '2022-08-04 00:00:00', 'is_active' => 0, 'max_picks' => 5, 'created_at' => NOW(), 'updated_at' => NOW(), ]);
        DB::table('weeks')->insert(['name' => 'Week 12', 'start_at' => '2022-08-05 00:00:00', 'is_active' => 0, 'max_picks' => 5, 'created_at' => NOW(), 'updated_at' => NOW(), ]);
        DB::table('weeks')->insert(['name' => 'Week 13', 'start_at' => '2022-08-06 00:00:00', 'is_active' => 0, 'max_picks' => 5, 'created_at' => NOW(), 'updated_at' => NOW(), ]);
        DB::table('weeks')->insert(['name' => 'Week 14', 'start_at' => '2022-08-07 00:00:00', 'is_active' => 0, 'max_picks' => 5, 'created_at' => NOW(), 'updated_at' => NOW(), ]);
        DB::table('weeks')->insert(['name' => 'Week 15', 'start_at' => '2022-08-08 00:00:00', 'is_active' => 0, 'max_picks' => 5, 'created_at' => NOW(), 'updated_at' => NOW(), ]);
        DB::table('weeks')->insert(['name' => 'Week 16', 'start_at' => '2022-08-09 00:00:00', 'is_active' => 0, 'max_picks' => 5, 'created_at' => NOW(), 'updated_at' => NOW(), ]);
        DB::table('weeks')->insert(['name' => 'Week 17', 'start_at' => '2022-08-10 00:00:00', 'is_active' => 0, 'max_picks' => 10, 'created_at' => NOW(), 'updated_at' => NOW(), ]);
    }
}
