<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
           'role_id' => 1,
           'name' => 'Ali',
           'email' => 'Ali@gmail.com',
           'phone' => +998993767698,
           'password' => Hash::make('parol'),
        ]);

        User::factory()->count(10)->create();
    }
}
