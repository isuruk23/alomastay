<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('@gmail.com'), // set your password here
        ]);

        $this->call(RoomSeeder::class);
        $this->call(CitiesSeeder::class);
        $this->call(ThingsToDoSeeder::class);
        $this->call(MultiDayTourSeeder::class);
    }
}
