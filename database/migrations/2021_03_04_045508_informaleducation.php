<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Informaleducation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('informaleducation', function (Blueprint $table) {
            $table->id('id',11);
            $table->integer('candidateid',5);
            $table->integer('course_trainingname',200);
            $table->string('year',4);
            $table->string('duration',4);
            $table->bolean('certificate');
            $table->string('sponsoreby',100);
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
