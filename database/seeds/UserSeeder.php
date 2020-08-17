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
        $user->name = 'usab manager';
        $user->email = 'secretary@gmail.com';
        $user->password = bcrypt('admin');
        $user->save();

        $user = new User();
        $user->name = 'anord';
        $user->email = '2017-04-01594';
        $user->password = bcrypt('coict');
        $user->save();

     

        
    }
}
