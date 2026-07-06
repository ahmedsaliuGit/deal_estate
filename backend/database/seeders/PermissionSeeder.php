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
                'name' => 'View Properties',
                'guard_name' => 'api',
            ],
            [
                'name' => 'Create Property',
                'guard_name' => 'api',
            ],
            [
                'name' => 'Edit Property',
                'guard_name' => 'api',
            ],
            [
                'name' => 'Delete Property',
                'guard_name' => 'api',
            ],

            // Tenants
            [
                'name' => 'View Tenants',
                'guard_name' => 'api',
            ],
            [
                'name' => 'Create Tenant',
                'guard_name' => 'api',
            ],
            [
                'name' => 'Edit Tenant',
                'guard_name' => 'api',
            ],
            [
                'name' => 'Delete Tenant',
                'guard_name' => 'api',
            ],

            // Payments
            [
                'name' => 'View Payments',
                'guard_name' => 'api',
            ],
            [
                'name' => 'Create Payment',
                'guard_name' => 'api',
            ],
            [
                'name' => 'Edit Payment',
                'guard_name' => 'api',
            ],
            [
                'name' => 'Delete Payment',
                'guard_name' => 'api',
            ],

            // Users
            [
                'name' => 'View Users',
                'guard_name' => 'api',
            ],
            [
                'name' => 'Create User',
                'guard_name' => 'api',
            ],
            [
                'name' => 'Edit User',
                'guard_name' => 'api',
            ],
            [
                'name' => 'Delete User',
                'guard_name' => 'api',
            ],

            //  units
            [
                'name' => 'View Units',
                'guard_name' => 'api',
            ],
            [
                'name' => 'Create Unit',
                'guard_name' => 'api',
            ],
            [
                'name' => 'Edit Unit',
                'guard_name' => 'api',
            ],
            [
                'name' => 'Delete Unit',
                'guard_name' => 'api',
            ],

            // Reports
            [
                'name' => 'View Reports',
                'guard_name' => 'api',
            ],
            [
                'name' => 'Generate Report',
                'guard_name' => 'api',
            ],

            // Maintenance
            [
                'name' => 'View Maintenance Requests',
                'guard_name' => 'api',
            ],
            [
                'name' => 'Create Maintenance Request',
                'guard_name' => 'api',
            ],
            [
                'name' => 'Edit Maintenance Request',
                'guard_name' => 'api',
            ],
            [
                'name' => 'Delete Maintenance Request',
                'guard_name' => 'api',
            ],
        ];

    Permission::upsert(
            $permissions,
            ['name', 'guard_name']
        );
    }
}
