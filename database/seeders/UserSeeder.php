<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use DirectoryTree\Authorization\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create a User
        $user = User::create([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'full_name' => 'John Doe',
            'email' => 'user@gmail.com',
            'password' => bcrypt('password'),
        ]);

        // Assign Role to User
        $role = Role::where('name', 'user')->firstOrFail();
        $user->roles()->save($role);

        // assign permissions to user
        $permissions = $role->permissions;
        $user->permissions()->saveMany($permissions);        
    }
}
