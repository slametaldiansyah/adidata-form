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
            $table->id()->length(11);
            $table->foreignId('candidateid')->constrained('candidate')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('languageid')->constrained('language')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('written')->constrained('proficiencieslevel')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('read')->constrained('proficiencieslevel')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('speaking')->constrained('proficiencieslevel')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('languageproficiency');
    }
}
