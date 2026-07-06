<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

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
                'guard_name' => 'api',
            ],
            [
                'name' => 'Property Manager',
                'guard_name' => 'api',
            ],
            [
                'name' => 'Agent',
                'guard_name' => 'api',
            ],
            [
                'name' => 'Accountant',
                'guard_name' => 'api',
            ],
            [
                'name' => 'Staff',
                'guard_name' => 'api',
            ],
            [
                'name' => 'Tenant',
                'guard_name' => 'api',
            ],
        ], ['name', 'guard_name']);
    }
}
