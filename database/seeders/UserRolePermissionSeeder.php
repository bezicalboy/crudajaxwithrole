<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::beginTransaction();
        try {
            $default_user_value = [
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
            ];

            $staff = User::create(array_merge([
                'email' => 'staff@gmail.com',
                'name' => 'staff',
            ], $default_user_value));
            $spv = User::create(array_merge([
                'email' => 'spv@gmail.com',
                'name' => 'spv',
            ], $default_user_value));
            $manager = User::create(array_merge([
                'email' => 'manager@gmail.com',
                'name' => 'manager',
            ], $default_user_value));
            $it = User::create(array_merge([
                'email' => 'it@gmail.com',
                'name' => 'it',
            ], $default_user_value));
            $admin = User::create(array_merge([
                'email' => 'admin@gmail.com',
                'name' => 'admin',
            ], $default_user_value));

            $role_staff = Role::create(['name' => 'staff']);
            $role_spv = Role::create(['name' => 'spv']);
            $role_manager = Role::create(['name' => 'manager']);
            $role_it = Role::create(['name' => 'it']);
            $role_admin = Role::create(['name' => 'admin']);

            $permission = Permission::create(['name' => 'read konfigurasi/roles']);
            $permission = Permission::create(['name' => 'create konfigurasi/roles']);
            $permission = Permission::create(['name' => 'update konfigurasi/roles']);
            $permission = Permission::create(['name' => 'delete konfigurasi/roles']);
            $permission = Permission::create(['name' => 'read konfigurasi/permissions']);
            $permission = Permission::create(['name' => 'read konfigurasi']);



            $role_it->givePermissionTo(['read konfigurasi', 'read konfigurasi/roles', 'create konfigurasi/roles', 'update konfigurasi/roles', 'delete konfigurasi/roles', 'read konfigurasi/permissions',]);
            $role_admin->givePermissionTo(['read konfigurasi', 'read konfigurasi/roles', 'create konfigurasi/roles', 'update konfigurasi/roles', 'delete konfigurasi/roles', 'read konfigurasi/permissions',]);
            $role_manager->givePermissionTo(['read konfigurasi', 'read konfigurasi/roles', 'create konfigurasi/roles',]);
            $role_spv->givePermissionTo(['read konfigurasi', 'read konfigurasi/roles', 'read konfigurasi/permissions',]);

            $staff->assignRole('staff');
            $spv->assignRole('spv');
            $manager->assignRole('manager');
            $it->assignRole('it');
            $admin->assignRole('admin');

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollback();
        }
    }
}
