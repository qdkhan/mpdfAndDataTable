<?php

namespace Database\Seeders;

use App\Models\UseDetail;
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
        // User::factory(100)->create();

        User::factory(100)
        ->has(UseDetail::factory()) // 👈 automatically assigns user_id
        ->create();
    }
}
