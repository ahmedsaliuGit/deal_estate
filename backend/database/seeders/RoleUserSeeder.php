<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::where('email', 'admin@example.org')->first();
        $superAdmin = Role::where('slug', 'super-admin')->first();

        $admin->roles()->syncWithoutDetaching([$superAdmin->id]);
    }
}
