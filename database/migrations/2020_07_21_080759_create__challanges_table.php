<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChallangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('challange', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('challange_type_id');
            $table->String('contact_no');
            $table->Text('complaint');
            $table->Text('solution');
            $table->String('evidence');
            $table->softdeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_challanges');
    }
}
