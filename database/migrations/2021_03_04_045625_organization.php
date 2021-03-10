<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Organization extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('organization', function (Blueprint $table) {
            $table->id('id',11);
            $table->integer('candidateid',11);
            $table->string('name',50);
            $table->string('organizationtype',50);
            $table->string('yearstart',4);
            $table->string('yearend',4);
            $table->string('position',100);
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
