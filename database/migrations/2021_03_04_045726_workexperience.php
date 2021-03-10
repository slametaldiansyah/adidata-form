<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Workexperience extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('workexperience', function (Blueprint $table) {
            $table->id('id',11);
            $table->integer('candidateid',11);
            $table->string('companyname',100);
            $table->string('lineofbussiness',200);
            $table->string('address',500);
            $table->date('start');
            $table->date('end');
            $table->biginteger('basicsalary',20);
            $table->integer('employeestatus',11);
            $table->string('leavingreason',200);
            $table->string('otherbenefit',200);
            $table->bolean('stillworking');
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
