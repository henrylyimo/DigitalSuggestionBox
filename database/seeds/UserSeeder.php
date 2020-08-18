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
        $user->reg_no = '2017-04-01591';
        $user->password = bcrypt('admin');
        $user->save();

    //  secrtary
        $user = new User();
        $user->name = 'USAB manager';
        $user->reg_no = '2017-04-01593';
        $user->password = bcrypt('usab');
        $user->save();


    //   Student
        $user = new User();
        $user->name = 'Henry';
        $user->reg_no = '2017-04-01594';
        $user->password = bcrypt('coict');
        $user->save();

     

        
    }
}
