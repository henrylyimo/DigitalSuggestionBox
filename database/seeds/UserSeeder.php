<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //admin
        $user = new User();
        $user->name = 'Admin';
        $user->email = 'Admin@gmail.com';
        $user->password = bcrypt('admin');
        $user->save();

    //  secrtary
        $user = new User();
        $user->name = 'USAB manager';
        $user->email = 'usab@gmail.com';
        $user->password = bcrypt('usab');
        $user->save();


    //   Student
        $user = new User();
        $user->name = 'Henry';
        $user->email = 'henry@gmail.com';
        $user->password = bcrypt('coict2019');
        $user->save();

     

        
    }
}
