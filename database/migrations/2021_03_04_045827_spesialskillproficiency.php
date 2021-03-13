<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Spesialskillproficiency extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('spesialskillproficiency', function (Blueprint $table) {
            $table->id()->length(11);
            $table->foreignId('candidateid')->constrained('candidate')->onDelete('cascade')->onUpdate('cascade');
            $table->string('skillname')->length(100);
            $table->foreignId('proficiencylevelid')->constrained('proficiencieslevel')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('spesialskillproficiency');
    }
}
