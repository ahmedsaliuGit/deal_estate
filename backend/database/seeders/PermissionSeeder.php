<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    protected $permissions = [
        // Properties
        [
            'name' => 'View Properties',
            'slug' => 'properties.view',
            'module' => 'properties',
            'description' => 'Allows the user to view properties and their details.',
            'created_by' => 'Ahmed Saliu'
        ],
        [
            'name' => 'Create Property',
            'slug' => 'properties.create',
            'module' => 'properties',
            'description' => 'Allows the user to create new properties.',
            'created_by' => 'Ahmed Saliu'
        ],
        [
            'name' => 'Edit Property',
            'slug' => 'properties.edit',
            'module' => 'properties',
            'description' => 'Allows the user to edit existing properties.',
            'created_by' => 'Ahmed Saliu'
        ],
        [
            'name' => 'Delete Property',
            'slug' => 'properties.delete',
            'module' => 'properties',
            'description' => 'Allows the user to delete properties.',
            'created_by' => 'Ahmed Saliu'
        ],

        // Tenants
        [
            'name' => 'View Tenants',
            'slug' => 'tenants.view',
            'module' => 'tenants',
            'description' => 'Allows the user to view tenants and their details.',
            'created_by' => 'Ahmed Saliu'
        ],
        [
            'name' => 'Create Tenant',
            'slug' => 'tenants.create',
            'module' => 'tenants',
            'description' => 'Allows the user to create new tenants.',
            'created_by' => 'Ahmed Saliu'
        ],
        [
            'name' => 'Edit Tenant',
            'slug' => 'tenants.edit',
            'module' => 'tenants',
            'description' => 'Allows the user to edit existing tenants.',
            'created_by' => 'Ahmed Saliu'
        ],
        [
            'name' => 'Delete Tenant',
            'slug' => 'tenants.delete',
            'module' => 'tenants',
            'description' => 'Allows the user to delete tenants.',
            'created_by' => 'Ahmed Saliu'
        ],

        // Payments
        [
            'name' => 'View Payments',
            'slug' => 'payments.view',
            'module' => 'payments',
            'description' => 'Allows the user to view payments and their details.',
            'created_by' => 'Ahmed Saliu'
        ],
        [
            'name' => 'Create Payment',
            'slug' => 'payments.create',
            'module' => 'payments',
            'description' => 'Allows the user to create new payments.',
            'created_by' => 'Ahmed Saliu'
        ],

        // Users
        [
            'name' => 'View Users',
            'slug' => 'users.view',
            'module' => 'users',
            'description' => 'Allows the user to view users and their details.',
            'created_by' => 'Ahmed Saliu'
        ],
        [
            'name' => 'Create User',
            'slug' => 'users.create',
            'module' => 'users',
            'description' => 'Allows the user to create new users.',
            'created_by' => 'Ahmed Saliu'
        ],
        [
            'name' => 'Edit User',
            'slug' => 'users.edit',
            'module' => 'users',
            'description' => 'Allows the user to edit existing users.',
            'created_by' => 'Ahmed Saliu'
        ],
        [
            'name' => 'Delete User',
            'slug' => 'users.delete',
            'module' => 'users',
            'description' => 'Allows the user to delete users.',
            'created_by' => 'Ahmed Saliu'
        ],

        //  units
        [
            'name' => 'View Units',
            'slug' => 'units.view',
            'module' => 'units',
            'description' => 'Allows the user to view units and their details.',
            'created_by' => 'Ahmed Saliu'
        ],
        [
            'name' => 'Create Unit',
            'slug' => 'units.create',
            'module' => 'units',
            'description' => 'Allows the user to create new units.',
            'created_by' => 'Ahmed Saliu'
        ],
        [
            'name' => 'Edit Unit',
            'slug' => 'units.edit',
            'module' => 'units',
            'description' => 'Allows the user to edit existing units.',
            'created_by' => 'Ahmed Saliu'
        ],
        [
            'name' => 'Delete Unit',
            'slug' => 'units.delete',
            'module' => 'units',
            'description' => 'Allows the user to delete units.',
            'created_by' => 'Ahmed Saliu'
        ],

        // Reports
        [
            'name' => 'View Reports',
            'slug' => 'reports.view',
            'module' => 'reports',
            'description' => 'Allows the user to view reports and their details.',
            'created_by' => 'Ahmed Saliu'
        ],
        [
            'name' => 'Generate Report',
            'slug' => 'reports.generate',
            'module' => 'reports',
            'description' => 'Allows the user to generate new reports.',
            'created_by' => 'Ahmed Saliu'
        ],

        // Maintenance
        [
            'name' => 'View Maintenance Requests',
            'slug' => 'maintenance.view',
            'module' => 'maintenance',
            'description' => 'Allows the user to view maintenance requests and their details.',
            'created_by' => 'Ahmed Saliu'
        ],
        [
            'name' => 'Create Maintenance Request',
            'slug' => 'maintenance.create',
            'module' => 'maintenance',
            'description' => 'Allows the user to create new maintenance requests.',
            'created_by' => 'Ahmed Saliu'
        ],
        [
            'name' => 'Edit Maintenance Request',
            'slug' => 'maintenance.edit',
            'module' => 'maintenance',
            'description' => 'Allows the user to edit existing maintenance requests.',
            'created_by' => 'Ahmed Saliu'
        ],
        [
            'name' => 'Delete Maintenance Request',
            'slug' => 'maintenance.delete',
            'module' => 'maintenance',
            'description' => 'Allows the user to delete maintenance requests.',
            'created_by' => 'Ahmed Saliu'
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::upsert(
            $this->permissions,
            ['slug'],
            ['name', 'module']
        );
    }
}
