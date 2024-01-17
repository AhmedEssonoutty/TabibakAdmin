<?php

namespace Database\Seeders;

use App\Constants\RoleConstants as RoleCostant;
use App\Constants\RoleNameConstants;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $defaultRoles = RoleNameConstants::values();
        foreach ($defaultRoles as $defaultRole){
            $role = Role::findOrCreate($defaultRole);
            if ($role->name == RoleNameConstants::ADMIN->value){
                $permissions = Permission::all();
                $role->syncPermissions($permissions);
            }
        }

    }
}
