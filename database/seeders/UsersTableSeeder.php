<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => now(),
                'password' => Hash::make('12345678'),
                'role' => 'admin',
                'remember_token' => Str::random(10),
                'created_at' => now(),
            ],
            [
                'name' => 'Driver',
                'email' => 'driver@driver.com',
                'email_verified_at' => now(),
                'password' => Hash::make('12345678'),
                'role' => 'driver',
                'remember_token' => Str::random(10),
                'created_at' => now(),
            ],
            [
                'name' => 'Owner',
                'email' => 'owner@owner.com',
                'email_verified_at' => now(),
                'password' => Hash::make('12345678'),
                'role' => 'owner',
                'remember_token' => Str::random(10),
                'created_at' => now(),
            ],
            [
                'name' => 'Manager',
                'email' => 'manager@manager.com',
                'email_verified_at' => now(),
                'password' => Hash::make('12345678'),
                'role' => 'manager',
                'remember_token' => Str::random(10),
                'created_at' => now(),
            ],
        ]);
    }
}
