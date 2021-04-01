<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateData1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::AddStudent('data1', function (Blueprint $table) {
            $table->increments('id');
        
            $table->string('StudFname');
            $table->string('StudMname');
            $table->string('StudLname');
            $table->string('Email');
            $table->string('CGPA');
            $table->string('EduStartYear');
            $table->string('EduFinishYear');
            $table->string('StuProfObj');
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
        Schema::dropIfExists('data1');
    }
}
