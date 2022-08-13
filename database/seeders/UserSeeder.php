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
            'name' => 'TSBP Admin',
            'nickname' => fake()->word(),
            'email' => 'admin@tsbp.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token' => Str::random(10),
            'is_admin' => true,
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
        DB::table('users')->insert([
            'name' => 'Don Shultz',
            'nickname' => fake()->word(),
            'email' => 'dshultz@tsbp.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token' => Str::random(10),
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
        DB::table('users')->insert([
            'name' => 'Chris Shultz',
            'nickname' => fake()->word(),
            'email' => 'cshultz@tsbp.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token' => Str::random(10),
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
        DB::table('users')->insert([
            'name' => 'Kenny Shultz',
            'nickname' => fake()->word(),
            'email' => 'kshultz@tsbp.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token' => Str::random(10),
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
        DB::table('users')->insert([
            'name' => 'Kevin Adkins',
            'nickname' => fake()->word(),
            'email' => 'kadkins@tsbp.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token' => Str::random(10),
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
        DB::table('users')->insert([
            'name' => 'Peter Gray',
            'nickname' => fake()->word(),
            'email' => 'pgray@tsbp.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token' => Str::random(10),
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
        DB::table('users')->insert([
            'name' => 'Mark Miller',
            'nickname' => fake()->word(),
            'email' => 'mmiller@tsbp.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token' => Str::random(10),
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
        DB::table('users')->insert([
            'name' => 'Al Gutman',
            'nickname' => fake()->word(),
            'email' => 'agutman@tsbp.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token' => Str::random(10),
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
        DB::table('users')->insert([
            'name' => 'Matt Gutman',
            'nickname' => fake()->word(),
            'email' => 'mgutman@tsbp.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token' => Str::random(10),
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
        DB::table('users')->insert([
            'name' => 'Chris Gutman',
            'nickname' => fake()->word(),
            'email' => 'cgutman@tsbp.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token' => Str::random(10),
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
        DB::table('users')->insert([
            'name' => 'Nick Gutman',
            'nickname' => fake()->word(),
            'email' => 'ngutman@tsbp.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token' => Str::random(10),
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
        DB::table('users')->insert([
            'name' => 'Brian Consolati',
            'nickname' => fake()->word(),
            'email' => 'bconsolati@tsbp.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token' => Str::random(10),
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
        DB::table('users')->insert([
            'name' => 'Ron Tanner',
            'nickname' => fake()->word(),
            'email' => 'rtanner@tsbp.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token' => Str::random(10),
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
        DB::table('users')->insert([
            'name' => 'David Pratt',
            'nickname' => fake()->word(),
            'email' => 'dpratt@tsbp.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token' => Str::random(10),
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
        DB::table('users')->insert([
            'name' => 'Mike Hilty',
            'nickname' => fake()->word(),
            'email' => 'mhilty@tsbp.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token' => Str::random(10),
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
        DB::table('users')->insert([
            'name' => 'Danny Butler',
            'nickname' => fake()->word(),
            'email' => 'dbutler@tsbp.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token' => Str::random(10),
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
    }
}
