<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'TSBP Player One',
            'email' => 'p1@tsbp.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'is_active' => true,
            'is_admin' => true,
            'remember_token' => Str::random(10),
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
        DB::table('users')->insert([
            'name' => 'TSBP Player Two',
            'email' => 'p2@tsbp.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'is_active' => true,
            'is_admin' => true,
            'remember_token' => Str::random(10),
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
        DB::table('users')->insert([
            'name' => 'TSBP Player Three',
            'email' => 'p3@tsbp.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'is_active' => true,
            'is_admin' => true,
            'remember_token' => Str::random(10),
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
        DB::table('users')->insert([
            'name' => 'TSBP Player Four',
            'email' => 'p4@tsbp.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'is_active' => true,
            'remember_token' => Str::random(10),
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
        DB::table('users')->insert([
            'name' => 'TSBP Player Five',
            'email' => 'p5@tsbp.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'is_active' => true,
            'remember_token' => Str::random(10),
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
        DB::table('users')->insert([
            'name' => 'TSBP Player Six',
            'email' => 'p6@tsbp.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'is_active' => true,
            'remember_token' => Str::random(10),
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
        DB::table('users')->insert([
            'name' => 'TSBP Player Seven',
            'email' => 'p7@tsbp.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'is_active' => true,
            'remember_token' => Str::random(10),
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
        DB::table('users')->insert([
            'name' => 'TSBP Player Eight',
            'email' => 'p8@tsbp.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'is_active' => true,
            'remember_token' => Str::random(10),
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
        DB::table('users')->insert([
            'name' => 'TSBP Player Nine',
            'email' => 'p9@tsbp.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'is_active' => true,
            'remember_token' => Str::random(10),
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
        DB::table('users')->insert([
            'name' => 'TSBP Player Ten',
            'email' => 'p10@tsbp.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'is_active' => true,
            'remember_token' => Str::random(10),
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
        DB::table('users')->insert([
            'name' => 'TSBP Player Eleven',
            'email' => 'p11@tsbp.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'is_active' => true,
            'remember_token' => Str::random(10),
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
        DB::table('users')->insert([
            'name' => 'TSBP Player Twelve',
            'email' => 'p12@tsbp.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'is_active' => true,
            'remember_token' => Str::random(10),
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
        DB::table('users')->insert([
            'name' => 'TSBP Player Thirteen',
            'email' => 'p13@tsbp.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'is_active' => true,
            'remember_token' => Str::random(10),
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
        DB::table('users')->insert([
            'name' => 'TSBP Player Fourteen',
            'email' => 'p14@tsbp.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'is_active' => true,
            'remember_token' => Str::random(10),
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
        DB::table('users')->insert([
            'name' => 'TSBP Player Fifteen',
            'email' => 'p15@tsbp.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'is_active' => true,
            'remember_token' => Str::random(10),
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
        DB::table('users')->insert([
            'name' => 'TSBP Player Sixteen',
            'email' => 'p16@tsbp.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'is_active' => true,
            'remember_token' => Str::random(10),
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
        DB::table('users')->insert([
            'name' => 'TSBP Player Seventeen',
            'email' => 'p17@tsbp.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'is_active' => true,
            'remember_token' => Str::random(10),
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
        DB::table('users')->insert([
            'name' => 'TSBP Player Eighteen',
            'email' => 'p18@tsbp.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'is_active' => true,
            'remember_token' => Str::random(10),
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
        DB::table('users')->insert([
            'name' => 'TSBP Player Nineteen',
            'email' => 'p19@tsbp.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'is_active' => true,
            'remember_token' => Str::random(10),
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
        DB::table('users')->insert([
            'name' => 'TSBP Player Twenty',
            'email' => 'p20@tsbp.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'is_active' => true,
            'remember_token' => Str::random(10),
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
        DB::table('users')->insert([
            'name' => 'TSBP Player Twenty One',
            'email' => 'p21@tsbp.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'is_active' => true,
            'remember_token' => Str::random(10),
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
        DB::table('users')->insert([
            'name' => 'TSBP Player Twenty Two',
            'email' => 'p22@tsbp.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'is_active' => true,
            'remember_token' => Str::random(10),
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
        DB::table('users')->insert([
            'name' => 'TSBP Player Twenty Three',
            'email' => 'p23@tsbp.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'is_active' => true,
            'remember_token' => Str::random(10),
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
        DB::table('users')->insert([
            'name' => 'TSBP Player Twenty Four',
            'email' => 'p24@tsbp.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'is_active' => true,
            'remember_token' => Str::random(10),
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
        DB::table('users')->insert([
            'name' => 'TSBP Player Twenty Five',
            'email' => 'p25@tsbp.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'is_active' => true,
            'remember_token' => Str::random(10),
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
        DB::table('users')->insert([
            'name' => 'TSBP Player Twenty Six',
            'email' => 'p26@tsbp.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'is_active' => true,
            'remember_token' => Str::random(10),
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
        DB::table('users')->insert([
            'name' => 'TSBP Player Twenty Seven',
            'email' => 'p27@tsbp.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'is_active' => true,
            'remember_token' => Str::random(10),
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
        DB::table('users')->insert([
            'name' => 'TSBP Player Twenty Eight',
            'email' => 'p28@tsbp.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'is_active' => true,
            'remember_token' => Str::random(10),
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
        DB::table('users')->insert([
            'name' => 'TSBP Player Twenty Nine',
            'email' => 'p29@tsbp.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'is_active' => true,
            'remember_token' => Str::random(10),
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
        DB::table('users')->insert([
            'name' => 'TSBP Player Thirty',
            'email' => 'p30@tsbp.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'is_active' => true,
            'remember_token' => Str::random(10),
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
    }
}
