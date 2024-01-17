<?php

namespace Database\Seeders;

use App\Constants\RoleNameConstants;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Throwable;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $role = Role::findByName(RoleNameConstants::ADMIN->value);
        $user = User::where('email' , 'admin@admin.com')->first();
        if (!$user){
            try {
                DB::transaction(static function() use ($role){
                    $user = User::firstOrCreate([ 'email' => 'info@roms.com'],[
                        'name' => 'admin',
                        'email' => 'admin@admin.com',
                        'phone' => 12345678910,
                        'password' => 123456
                    ]);
                    $user->assignRole($role);
                });
            }catch (Exception $e) {
                echo $e->getMessage();
            } catch (Throwable $e) {
                echo $e->getMessage();
            }
        } else {
            $user->assignRole($role);
        }
    }
}
