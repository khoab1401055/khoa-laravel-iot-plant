<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Tạo người dùng "User1" (Super Admin)
        $user1 = User::create([
            'name' => 'Super Admin',
            'username' => 'superadamin',
            'sex' => 'male',
            'email' => 'superadamin@plant-iot.com',
            'is_active'=>true,
            'password' => Hash::make('superadamin'),
        ]);

        // Tạo người dùng "User2" (Admin)
        $user2 = User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'sex' => 'male',
            'is_active'=>true,
            'email' => 'admin@plant-iot.com',
            'password' => Hash::make('admin'),
        ]);
        $user4 = User::create([
            'name' => 'Editor',
            'username' => 'editor',
            'sex' => 'male',
            'email' => 'editor@plant-iot.com',
            'password' => Hash::make('editor'),
        ]);
        $user3 = User::create([
            'name' => 'User',
            'username' => 'user',
            'sex' => 'male',
            'email' => 'user@plant-iot.com',
            'password' => Hash::make('user'),
        ]);

        $user5 = User::create([
            'name' => 'Monitor',
            'username' => 'monitor',
            'sex' => 'male',
            'email' => 'monitor@plant-iot.com',
            'password' => Hash::make('monitor'),
        ]);

// Tạo permission "manage_users" (ví dụ)
$manageUsersPermission = Permission::firstOrCreate(['name' => 'manage_users']);

// Gán permission "manage_users" cho User2
// $user2->givePermissionTo($manageUsersPermission);


$superAdminRole = Role::firstOrCreate(['name' => 'Super Admin']);
$superAdminOnlyRole = Role::firstOrCreate(['name' => 'Admin']);
$editorRole = Role::firstOrCreate(['name' => 'Editor']);
$monitorRole = Role::firstOrCreate(['name' => 'Monitor']);

$userRoles = Role::firstOrCreate(['name' => 'User']);

$user1->assignRole($superAdminRole);
$user2->assignRole($superAdminOnlyRole);
$user3->assignRole($userRoles);
$user4->assignRole($editorRole);
$user5->assignRole($monitorRole);


    }
}
