<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Genre;
use App\Models\Image;
use App\Models\Test;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Test::factory()->count(3)->create();

//
//        \App\Models\User::factory(1)->create();
//        \App\Models\Room::factory(3)->create();
//        \App\Models\Zone::factory(3)->create();
//         \App\Models\User::factory()->create([
//             'name' => 'Test User',
//             'email' => 'test@example.com',
//         ]);
//         $this->call(RoleSedeer::class);
//         $this->call(adminSedeer::class);
//
//        Genre::factory(10)->create();
    }
}

