<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use DirectoryTree\Authorization\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Admin User
        $admin = User::create([
            'first_name' => 'Super',
            'last_name' => 'Admin',
            'full_name' => 'Super Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'super_admin',
        ]);

        // Assign Role to Admin User
        $role = Role::where('name', 'super_admin')->firstOrFail();
        $admin->roles()->save($role);

        // assign permissions to admin user
        $permissions = $role->permissions;
        $admin->permissions()->saveMany($permissions);
    }
}
