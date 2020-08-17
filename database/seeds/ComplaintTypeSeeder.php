<?php

use Illuminate\Database\Seeder;
use App\ComplaintType;

class ComplaintTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = new ComplaintType();
        $type->category = "Academy";
        $type->save();

        $type = new ComplaintType();
        $type->category = "Corruption";
        $type->save();


        $type = new ComplaintType();
        $type->category = "Cafeteria";
        $type->save();

        $type = new ComplaintType();
        $type->category = "Descrimination";
        $type->save();

        $type = new ComplaintType();
        $type->category = "Harrasment";
        $type->save();

        $type = new ComplaintType();
        $type->category = "Unfair Conduct";
        $type->save();


        $type = new ComplaintType();
        $type->category = "Personal Issue";
        $type->save();

        $type = new ComplaintType();
        $type->category = "Profetional Issue";
        $type->save();

        $type = new ComplaintType();
        $type->category = "others";
        $type->save();
    }
}
