<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Reference extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('reference', function (Blueprint $table) {
            $table->id('id',11);
            $table->integer('candidateid',11);
            $table->string('name',50);
            $table->string('phonenumber',50);
            $table->string('position',50);
            $table->string('division',50);
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
