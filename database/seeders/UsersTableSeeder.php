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
            'name' => 'Administrator',
            'username' => 'admin',
            'sex' => 'male',
            'email' => 'administrator@plant-iot.com',
            'is_active'=>true,
            'password' => Hash::make('admin'),
        ]);

        // Tạo người dùng "User2" (Admin)
        $user2 = User::create([
            'name' => 'Phan Tân Khoa',
            'username' => 'khoaphan',
            'sex' => 'male',
            'is_active'=>true,

            'email' => 'khoaphan@plant-iot.com',
            'password' => Hash::make('khoaphan'),
        ]);
        $user3 = User::create([
            'name' => 'Lê Trung Tín',
            'username' => 'tinle',
            'sex' => 'male',
            'email' => 'tinle@plant-iot.com',
            'password' => Hash::make('tinle'),
        ]);

// Tạo permission "manage_users" (ví dụ)
$manageUsersPermission = Permission::firstOrCreate(['name' => 'manage_users']);

// Gán permission "manage_users" cho User2
// $user2->givePermissionTo($manageUsersPermission);


$superAdminRole = Role::firstOrCreate(['name' => 'Super Admin']);
$userRoles = Role::firstOrCreate(['name' => 'User']);

$user1->assignRole($superAdminRole);
$user2->assignRole($superAdminRole);
$user3->assignRole($userRoles);


    }
}
