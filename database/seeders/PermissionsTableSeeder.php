<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $defaultPermissions = Permission::defaultPermissions();
        Schema::disableForeignKeyConstraints();
        foreach ($defaultPermissions as $perm) {
            Permission::firstOrCreate($perm);
        }
        Schema::enableForeignKeyConstraints();
    }
}
