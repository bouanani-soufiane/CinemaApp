<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class adminSedeer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $user= User::create([
            'name' => 'admin1',
            'email' => 'admin1@gmail.com',
            'password' => Hash::make('password'),

        ]);
        $user->assignRole('admin');
    }
}
