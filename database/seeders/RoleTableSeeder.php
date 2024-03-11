<?php

namespace Database\Seeders;

use App\Constants\RoleNameConstants;
use App\Models\Permission;
use App\Models\Role;
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
            if ($role->name == RoleNameConstants::DOCTOR->value){
                $doctorPermissions = ['create-article', 'update-article', 'delete-article'];
                $permissions = Permission::whereIn('name', $doctorPermissions)->get();
                $role->syncPermissions($permissions);
            }
            if ($role->name == RoleNameConstants::PATIENT->value){
                $patientPermissions = ['read-article', 'create-rate', 'edit-rate', 'delete-rate',
                    'read-rate', 'create-complaint', 'edit-complaint', 'delete-complaint', 'read-complaint'];
                $permissions = Permission::whereIn('name', $patientPermissions)->get();
                $role->syncPermissions($permissions);
            }
        }

    }
}
