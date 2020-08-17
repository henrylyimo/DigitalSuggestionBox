<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\User;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create([ 'name' => 'Admin']);
        $role = Role::create([ 'name' => 'Secretary']);
        $role = Role::create([ 'name' => 'Students']);


        $user = User::find(1);
        $user->assignRole('Admin');

        $user = User::find(2);
        $user->assignRole('Secretary');

        $user = User::find(3);
        $user->assignRole('Students');

    }
}
