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
            $table->id()->length(11);
            $table->foreignId('candidateid')->constrained('candidate')->onDelete('cascade')->onUpdate('cascade');
            $table->string('companyname')->length(100);
            $table->string('lineofbussiness')->length(200);
            $table->string('address')->length(500);
            $table->date('start');
            $table->date('end')->nullable();
            $table->biginteger('basicsalary')->length(20);
            $table->foreignId('employeestatusid')->constrained('employeestatus')->onDelete('cascade')->onUpdate('cascade');
            $table->string('leavingreason')->length(200);
            $table->string('otherbenefit')->length(200)->nullable();
            $table->boolean('stillworking');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workexperience');
    }
}
