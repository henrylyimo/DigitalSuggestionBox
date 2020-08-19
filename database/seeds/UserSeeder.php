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
        $user->name = 'Administrator';
        $user->reg_no = '2017-04-00000';
        $user->course = 'Bsc with Computer Science';
        $user->password = bcrypt('admin');
        $user->save();

    //  secrtary
        $user = new User();
        $user->name = 'USAB manager';
        $user->reg_no = '2017-04-00001';
        $user->course = 'Bsc with Computer Science';
        $user->password = bcrypt('usab');
        $user->save();


    //   Student
        $user = new User();
        $user->name = 'HENRY PATRICK LYIMO';
        $user->reg_no = '2017-04-01597';
        $user->course = 'Bsc with Computer Science';
        $user->password = bcrypt('coict2020');
        $user->save();
        
    }
}
