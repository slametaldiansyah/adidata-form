<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Formaleducation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('formaleducation', function (Blueprint $table) {
            $table->id('id',11);
            $table->integer('candidateid',5);
            $table->integer('educationlevelid',5);
            $table->string('institutionname',200);
            $table->string('location',500);
            $table->string('major',100);
            $table->decimal('GPA',10,0);
            $table->string('yearentry',4);
            $table->string('yeargraduation',4);
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
        //
    }
}
