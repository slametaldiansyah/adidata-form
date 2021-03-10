<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Familymember extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('familymember', function (Blueprint $table) {
            $table->id('id',11);
            $table->integer('familyid',5);
            $table->integer('familystatusid',5);
            $table->string('name',60);
            $table->string('sexid',4);
            $table->date('birthdate');
            $table->integer('educationlevel',11);
            $table->integer('ocupation',11);
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
