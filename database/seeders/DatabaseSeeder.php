<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Call Role Seeder
        $this->call(RoleSeeder::class);

        // Call Admin Seeder
        $this->call(AdminSeeder::class);

        // Call User Seeder
        $this->call(UserSeeder::class);
    }
}
