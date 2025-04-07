<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Backpack\PermissionManager\app\Models\Role;


class RoleSeeder extends Seeder
{
    public function run()
    {
        // Create Super Admin Role if not exists
        $superAdminRole = Role::where('name', 'superadmin')->first();
        if (!$superAdminRole) {
            $superAdminRole = Role::create([
                'name' => 'superadmin',
                'guard_name' => 'web',
            ]);
        }

        // Create Admin Role if not exists
        $adminRole = Role::where('name', 'admin')->first();
        if (!$adminRole) {
            $adminRole = Role::create([
                'name' => 'admin',
                'guard_name' => 'web',
            ]);
        }
    }
}
