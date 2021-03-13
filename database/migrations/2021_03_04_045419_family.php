<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Family extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('family', function (Blueprint $table) {
            $table->id()->length(11);
            $table->foreignId('candidateid')->constrained('candidate')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('maritalstatusid')->constrained('maritalstatus')->onDelete('cascade')->onUpdate('cascade');
            $table->string('maritalyear')->length(4)->nullable();
            $table->string('divorceyear')->length(4)->nullable();
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
        Schema::dropIfExists('family');
    }
}
