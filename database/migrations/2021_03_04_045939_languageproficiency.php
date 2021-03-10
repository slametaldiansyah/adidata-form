<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Languageproficiency extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('languageproficiency', function (Blueprint $table) {
            $table->id('id',11);
            $table->integer('candidateid',5);
            $table->integer('languageid',11);
            $table->integer('written',11);
            $table->integer('read',11);
            $table->integer('speaking',11);
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
