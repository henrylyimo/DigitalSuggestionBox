<?php

use Illuminate\Database\Seeder;
use App\OpinionType;

class OpinionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $type = new OpinionType();
        $type->category = "Busness";
        $type->save();

        $type = new OpinionType();
        $type->category = "Innovation";
        $type->save();


        $type = new OpinionType();
        $type->category = "Projects";
        $type->save();

        $type = new OpinionType();
        $type->category = "others";
        $type->save();
    }
}
