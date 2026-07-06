<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            // Properties
            [
                'name' => 'view properties',
                'guard_name' => 'api',
            ],
            [
                'name' => 'create property',
                'guard_name' => 'api',
            ],
            [
                'name' => 'edit property',
                'guard_name' => 'api',
            ],
            [
                'name' => 'delete property',
                'guard_name' => 'api',
            ],

            // Tenants
            [
                'name' => 'view tenants',
                'guard_name' => 'api',
            ],
            [
                'name' => 'create tenant',
                'guard_name' => 'api',
            ],
            [
                'name' => 'edit tenant',
                'guard_name' => 'api',
            ],
            [
                'name' => 'delete tenant',
                'guard_name' => 'api',
            ],

            // Payments
            [
                'name' => 'view payments',
                'guard_name' => 'api',
            ],
            [
                'name' => 'create payment',
                'guard_name' => 'api',
            ],
            [
                'name' => 'edit payment',
                'guard_name' => 'api',
            ],
            [
                'name' => 'delete payment',
                'guard_name' => 'api',
            ],

            // Users
            [
                'name' => 'view users',
                'guard_name' => 'api',
            ],
            [
                'name' => 'create user',
                'guard_name' => 'api',
            ],
            [
                'name' => 'edit user',
                'guard_name' => 'api',
            ],
            [
                'name' => 'delete user',
                'guard_name' => 'api',
            ],

            //  units
            [
                'name' => 'view units',
                'guard_name' => 'api',
            ],
            [
                'name' => 'create unit',
                'guard_name' => 'api',
            ],
            [
                'name' => 'edit unit',
                'guard_name' => 'api',
            ],
            [
                'name' => 'delete unit',
                'guard_name' => 'api',
            ],

            // Reports
            [
                'name' => 'view reports',
                'guard_name' => 'api',
            ],
            [
                'name' => 'generate report',
                'guard_name' => 'api',
            ],

            // Maintenance
            [
                'name' => 'view maintenance requests',
                'guard_name' => 'api',
            ],
            [
                'name' => 'create maintenance request',
                'guard_name' => 'api',
            ],
            [
                'name' => 'edit maintenance request',
                'guard_name' => 'api',
            ],
            [
                'name' => 'delete maintenance request',
                'guard_name' => 'api',
            ],
        ];

        Permission::upsert(
            $permissions,
            ['name', 'guard_name']
        );

        app(\Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();
    }
}
