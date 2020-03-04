 <?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name', 'admin')->first();
        // $role_pharmacist = Role::where('name', 'pharmacist')->first();
        // $role_customer = Role::where('name', 'customer')->first();

        $admin = new User();
        $admin->name = 'Admin Name';
        $admin->email = 'admin@example.com';
        $admin->password = bcrypt('secret');
        $admin->save();
        $admin->roles()->attach($role_admin);

        // $pharmacist = new User();
        // $pharmacist->name = 'Pharmacist Name';
        // $pharmacist->email = 'pharmacist@example.com';
        // $pharmacist->password = bcrypt('secret');
        // $pharmacist->save();
        // $pharmacist->roles()->attach($role_pharmacist);

        // $customer = new User();
        // $customer->name = 'Customer Name';
        // $customer->email = 'Customer#example.com';
        // $customer->password = bcrypt('secret');
        // $customer->save();
        // $customer->roles()->attach($role_customer);
    }
}
