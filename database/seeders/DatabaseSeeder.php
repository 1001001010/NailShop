<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'surname' => 'admin',
            'fathername' => 'admin',
            'email' => 'admin@gmail.com',
            'number' => '111111111',
            'city' => 'Москва',
            'gender' => 'male',
            'birthday' => '2000-01-01',
            'is_admin' => true,
            'password' => Hash::make('00000000'),
        ]);
    }
}
