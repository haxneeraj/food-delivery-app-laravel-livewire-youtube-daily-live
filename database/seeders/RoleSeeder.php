<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DirectoryTree\Authorization\Role;
use DirectoryTree\Authorization\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Permissions
        foreach (config('permissions.permissions') as $key => $value) {
            foreach ($value as $permission) {
                Permission::create([
                    'name' => $permission['name'],
                    'label' => $permission['label'],
                    'group_name' => $permission['group_name'],
                ]);
            }
        }

        // Roles
        foreach (config('permissions.roles') as $key => $value) {
            $role = Role::create([
                'name' => $key,
                'label' => $value,
            ]);

            $config_permissions = collect(config('permissions.permissions')[$key])->pluck('name')->toArray();

            $permissions = Permission::whereIn('name', $config_permissions)->get();

            $role->grant($permissions);
        }
        
    }
}
