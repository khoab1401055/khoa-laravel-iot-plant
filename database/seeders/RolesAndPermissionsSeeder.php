<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create roles
        $superAdminRole = Role::create(['name' => 'Super Admin']);
        $adminRole = Role::create(['name' => 'Admin']);
        $editorRole = Role::create(['name' => 'Editor']);
        $userRole = Role::create(['name' => 'User']);
        $MonitorRole = Role::create(['name' => 'Monitor']);

        // Create permissions
        $manageUsersPermission = Permission::create(['name' => 'manage_users']);
        $createPostPermission = Permission::create(['name' => 'create_post']);
        $editPostPermission = Permission::create(['name' => 'edit_post']);
        $deletePostPermission = Permission::create(['name' => 'delete_post']);
        $onlyViewPostPermission = Permission::create(['name' => 'only_view']);

        // Assign permissions to roles
        $superAdminRole->syncPermissions([
            $manageUsersPermission,
            $createPostPermission,
            $editPostPermission,
            $deletePostPermission,
        ]);

        $adminRole->syncPermissions([
            $createPostPermission,
            $editPostPermission,
            $deletePostPermission,
        ]);

        $editorRole->syncPermissions([
            $createPostPermission,
            $editPostPermission,
        ]);

        $userRole->syncPermissions([
            $createPostPermission,
        ]);
        $MonitorRole->syncPermissions([
            $onlyViewPostPermission,
        ]);


    }
}
