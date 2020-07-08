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
        Schema::create('challanges', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('college');
            $table->string('email');
            $table->string('course');
            $table->integer('contact_no');
            $table->bigInteger('challange_type_id')->nullable();
            $table->string('complain');
            $table->string('c_solution');
            $table->string('evidence');
            $table->string('status')->nullable();
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
        Schema::dropIfExists('challanges');
    }
}
