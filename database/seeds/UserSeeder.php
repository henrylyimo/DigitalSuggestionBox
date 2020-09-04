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
        $user->course = 'Admin of the system';
        $user->password = bcrypt('coict2020');
        $user->save();
        $user->assignRole('Admin');

    //  secrtary
        $user = new User();
        $user->name = 'Dean of Students';
        $user->reg_no = '2017-04-00001';
        $user->course = 'Dean of stusent';
        $user->password = bcrypt('coict2020');
        $user->save();
        $user->assignRole('Secretary');


        


    //   Student
        $user = new User();
        $user->name = 'PATRICK ANORD';
        $user->reg_no = '2017-04-01594';
        $user->course = 'Bsc with Computer Science';
        $user->password = bcrypt('coict2020');
        $user->save();
        $user->assignRole('Students');

        $user = new User();
        $user->name = 'MSIRU MICHAEL';
        $user->reg_no = '2017-04-01595';
        $user->course = 'Bsc with Computer Science';
        $user->password = bcrypt('coict2020');
        $user->save();
        $user->assignRole('Students');

        $user = new User();
        $user->name = 'KIWANGO ANOLD';
        $user->reg_no = '2017-04-01596';
        $user->course = 'Bsc with Computer Science';
        $user->password = bcrypt('coict2020');
        $user->save();
        $user->assignRole('Students');

        $user = new User();
        $user->name = 'LYIMO PATRICK HENRY ';
        $user->reg_no = '2017-04-01597';
        $user->course = 'Bsc with Computer Science';
        $user->password = bcrypt('coict2020');
        $user->save();
        $user->assignRole('Students');

        $user = new User();
        $user->name = 'MEENA NANCY FREDRICK';
        $user->reg_no = '2017-04-01550';
        $user->course = 'Bsc in Computer Science';
        $user->password = bcrypt('coict2020');
        $user->save();
        $user->assignRole('Students');

        $user = new User();
        $user->name = 'MKOMAJI ALOYCE';
        $user->reg_no = '2017-04-01551';
        $user->course = 'Bsc in Computer Science';
        $user->password = bcrypt('coict2020');
        $user->save();
        $user->assignRole('Students');

        $user = new User();
        $user->name = 'MAFTAH ALLY WAZIRI';
        $user->reg_no = '2017-04-01552';
        $user->course = 'Bsc in Computer Science';
        $user->password = bcrypt('coict2020');
        $user->save();
        $user->assignRole('Students');

        $user = new User();
        $user->name = 'MNULI SHABAN ALLY';
        $user->reg_no = '2017-04-01553';
        $user->course = 'Bsc in Computer Engineering';
        $user->password = bcrypt('coict2020');
        $user->save();
        $user->assignRole('Students');

        $user = new User();
        $user->name = 'MUJUMBA FREDRICK';
        $user->reg_no = '2017-04-01554';
        $user->course = 'Bsc in Computer Engineering';
        $user->password = bcrypt('coict2020');
        $user->save();
        $user->assignRole('Students');

        $user = new User();
        $user->name = 'PAUL AMOSI';
        $user->reg_no = '2017-04-01555';
        $user->course = 'Bsc in Computer Engineering';
        $user->password = bcrypt('coict2020');
        $user->save();
        $user->assignRole('Students');

        $user = new User();
        $user->name = 'LYIMO NANCY PATRICK';
        $user->reg_no = '2017-04-01556';
        $user->course = 'Bsc in telecommunication';
        $user->password = bcrypt('coict2020');
        $user->save();
        $user->assignRole('Students');

        $user = new User();
        $user->name = 'HENRY PATRICK LYIMO';
        $user->reg_no = '2017-04-01557';
        $user->course = 'Bsc in telecommunication';
        $user->password = bcrypt('coict2020');
        $user->save();
        $user->assignRole('Students');
        
    }
}
