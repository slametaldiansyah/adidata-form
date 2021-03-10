<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Candidate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('candidate', function (Blueprint $table) {
            $table->id()->length(11);
            $table->string('name')->length(60);
            $table->string('birthplace')->length(100);
            $table->date('birthdate');
            $table->char('ktpnumber')->length(16)->unique();
            $table->char('npwpnumber')->length(16)->unique();
            $table->string('cellphonenumber')->length(15);
            $table->foreignId('bloodid')->constrained('bloodtype')->onDelete('cascade')->onUpdate('cascade');
            // $table->string('blood')->length(1);
            // $table->string('citizenship')->length(50);
            $table->foreignId('citizenshipid')->constrained('citizenship')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('religionid')->constrained('religion')->onDelete('cascade')->onUpdate('cascade');
            // $table->string('religion')->length(1);
            $table->string('homeaddress')->length(500);
            $table->string('phonenumber')->length(15);
            // $table->string('email')->length(50);
            $table->string('email')->unique();
            $table->foreignId('sexid')->constrained('sex')->onDelete('cascade')->onUpdate('cascade');
            // $table->string('sex')->length(1);
            $table->date('createdate');
            $table->tinyinteger('isfreshgraduate')->length(1);
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
        Schema::dropIfExists('candidate');
    }
}
