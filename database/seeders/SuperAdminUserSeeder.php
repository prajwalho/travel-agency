<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Backpack\PermissionManager\app\Models\Role;

class SuperAdminUserSeeder extends Seeder
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

        // Create Super Admin User if not exists
        $superAdminUser = User::where('email', 'superadmin@example.com')->first();
        if (!$superAdminUser) {
            $superAdminUser = User::create([
                'name' => 'Super Admin User',
                'email' => 'superadmin@example.com',
                'password' => bcrypt('password'), // You can change this password
            ]);

            // Assign Admin Role to Super Admin User
            $superAdminUser->assignRole($superAdminRole);
        }
    }
}
