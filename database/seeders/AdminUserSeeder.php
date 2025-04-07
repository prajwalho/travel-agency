<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Backpack\PermissionManager\app\Models\Role;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        // Create Admin Role if not exists
        $adminRole = Role::where('name', 'admin')->first();
        if (!$adminRole) {
            $adminRole = Role::create([
                'name' => 'admin',
                'guard_name' => 'web',
            ]);
        }

        // Create Admin User if not exists
        $adminUser = User::where('email', 'admin@example.com')->first();
        if (!$adminUser) {
            $adminUser = User::create([
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => bcrypt('password'), // You can change this password
            ]);

            // Assign Admin Role to Admin User
            $adminUser->assignRole($adminRole);
        }
    }
}
