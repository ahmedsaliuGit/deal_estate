<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class PermissionRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $super_admin = Role::where('slug', 'super-admin')->first();

        $super_admin->permissions()->sync(
            Permission::whereIn('slug', [
                'properties.view',
                'properties.create',
                'properties.edit',
                'properties.delete',
                'tenants.view',
                'tenants.create',
                'tenants.edit',
                'tenants.delete',
                'maintenance.view',
                'maintenance.create',
                'maintenance.edit',
                'maintenance.delete',
                'payments.view',
                'payments.create',
                'payments.edit',
                'payments.delete',
                'users.view',
                'users.create',
                'users.edit',
                'users.delete',
                'reports.view',
                'reports.create',
                'reports.edit',
                'reports.delete',
                'units.view',
                'units.create',
                'units.edit',
                'units.delete',
            ])->pluck('id')
        );

        $manager = Role::where('slug', 'property-manager')->first();

        $manager->permissions()->sync(
            Permission::whereIn('slug', [
                'properties.view',
                'properties.create',
                'properties.edit',
                'tenants.view',
                'tenants.create',
                'maintenance.view',
                'maintenance.create',
            ])->pluck('id')
        );

        $accountant = Role::where('slug', 'accountant')->first();

        $accountant->permissions()->sync(
            Permission::whereIn('slug', [
                'payments.view',
                'payments.create',
                'payments.edit',
                'reports.view',
            ])->pluck('id')
        );

        $tenant = Role::where('slug', 'tenant')->first();

        $tenant->permissions()->sync(
            Permission::whereIn('slug', [
                'properties.view',
                'maintenance.view',
                'maintenance.create',
                'maintenance.edit',
                'maintenance.delete',
                'payments.view',
            ])->pluck('id')
        );

        $staff = Role::where('slug', 'staff')->first();

        $staff->permissions()->sync(
            Permission::whereIn('slug', [
                'properties.view',
                'properties.create',
                'properties.edit',
                'properties.delete',
                'units.view',
                'units.create',
                'units.edit',
                'units.delete',
                'tenants.view',
                'maintenance.view',
                'payments.view',
            ])->pluck('id')
        );
    }
}
