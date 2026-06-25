<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::upsert([
            [
                'name' => 'Super Admin',
                'slug' => 'super-admin',
                'description' => 'Super Admin has access to all the system features and settings.',
                'is_system' => true,
                'created_by' => 'Ahmed Saliu'
            ],
            [
                'name' => 'Property Manager',
                'slug' => 'property-manager',
                'description' => 'Property Manager has access to manage properties and their details.',
                'is_system' => true,
                'created_by' => 'Ahmed Saliu'
            ],
            [
                'name' => 'Accountant',
                'slug' => 'accountant',
                'description' => 'Accountant has access to manage financial records and reports.',
                'is_system' => true,
                'created_by' => 'Ahmed Saliu'
            ],
            [
                'name' => 'Staff',
                'slug' => 'staff',
                'description' => 'Staff has access to manage daily operations.',
                'is_system' => true,
                'created_by' => 'Ahmed Saliu'
            ],
            [
                'name' => 'Tenant',
                'slug' => 'tenant',
                'description' => 'Tenant has access to view and manage their rental properties.',
                'is_system' => true,
                'created_by' => 'Ahmed Saliu'
            ],
        ], ['slug'], ['created_by']);
    }
}
