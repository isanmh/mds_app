<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // permissions
        // Permission::create(['name' => 'create post']);
        $permissions = [
            'add-user',
            'edit-user',
            'delete-user',
            'view-user',

            'add-role',
            'edit-role',
            'delete-role',
            'view-role',

            'add-course',
            'edit-course',
            'delete-course',
            'view-course',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // roles
        $roles = [
            'admin',
            'sales',
            'member',
            'operator',
        ];

        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }

        // assign permissions to roles
        $roleAdmin = Role::findByName('admin');
        $roleAdmin->givePermissionTo(Permission::all());


        $roleSales = Role::findByName('sales');
        $roleSales->givePermissionTo([
            'add-course',
            'edit-course',
            'delete-course',
            'view-course',
        ]);

        $roleMember = Role::findByName('member');
        $roleMember->givePermissionTo([
            'view-course',
        ]);

        $roleOperator = Role::findByName('operator');
        $roleOperator->givePermissionTo([
            'edit-user',
            'view-user',

            'view-role',

            'add-course',
            'edit-course',
            'delete-course',
            'view-course',
        ]);
    }
}
