<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = new Role();
        $role_admin->name = 'admin';
        $role_admin->description = 'A admin user';
        $role_admin->save();

        $role_pharmacist = new Role();
        $role_pharmacist->name = 'pharmacist';
        $role_pharmacist->description = 'A pharmacy user';
        $role_pharmacist->save();

        $role_customer = new Role();
        $role_customer->name = 'customer';
        $role_customer->description = 'A customer user';
        $role_customer->save();
    }
}
