<?php

return [
    'roles' => [
        'super_admin' => 'Super Admin',
        'user' => 'User',
    ],
    'permissions' => [
        'super_admin' => [            
            // User Management
            [
                'name' => 'user.create',
                'label' => 'Create User',
                'group_name' => 'User Management'
            ],
            [
                'name' => 'user.read',
                'label' => 'Read User',
                'group_name' => 'User Management'
            ],
            [
                'name' => 'user.update',
                'label' => 'Update User',
                'group_name' => 'User Management'
            ],
            [
                'name' => 'user.delete',
                'label' => 'Delete User',
                'group_name' => 'User Management'
            ],
        ],
        'user' => []
    ]
];