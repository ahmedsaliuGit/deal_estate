<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Role;
use Illuminate\Database\Seeder;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app(\Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();

        $super_admin = Role::findByName('Super Admin');

        $super_admin->givePermissionTo([
            'view properties',
            'create property',
            'edit property',
            'delete property',
            'view tenants',
            'create tenant',
            'edit tenant',
            'delete tenant',
            'view maintenance requests',
            'create maintenance request',
            'edit maintenance request',
            'delete maintenance request',
            'view payments',
            'create payment',
            'edit payment',
            'delete payment',
            'view users',
            'create user',
            'edit user',
            'delete user',
            'view reports',
            'generate report',
            'view units',
            'create unit',
            'edit unit',
            'delete unit',
        ]);

        $manager = Role::findByName('Property Manager');

        $manager->givePermissionTo([
            'view properties',
            'create property',
            'edit property',
            'delete property',
            'view tenants',
            'create tenant',
            'edit tenant',
            'delete tenant',
            'view maintenance requests',
            'create maintenance request',
            'edit maintenance request',
            'delete maintenance request',
        ]);

        $agent = Role::findByName('Agent');

        $agent->givePermissionTo([
            'view properties',
            'edit property',
            'delete property',
            'create property',
            'view tenants',
            'view maintenance requests',
            'create maintenance request',
            'view payments',
            'view reports',
        ]);

        $accountant = Role::findByName('Accountant');

        $accountant->givePermissionTo([
            'view payments',
            'create payment',
            'edit payment',
            'view reports',
        ]);

        $tenant = Role::findByName('Tenant');

        $tenant->givePermissionTo([
            'view properties',
            'view maintenance requests',
            'create maintenance request',
            'delete maintenance request',
            'view payments',
        ]);

        $staff = Role::findByName('Staff');

        $staff->givePermissionTo([
            'view properties',
            'create property',
            'edit property',
            'delete property',
            'view units',
            'create unit',
            'edit unit',
            'delete unit',
            'view tenants',
            'view maintenance requests',
            'view payments',
        ]);
    }
}
