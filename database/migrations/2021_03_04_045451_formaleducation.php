<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Formaleducation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('formaleducation', function (Blueprint $table) {
            $table->id()->length(11);
            $table->foreignId('candidateid')->constrained('candidate')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('educationlevelid')->constrained('education')->onDelete('cascade')->onUpdate('cascade');
            // $table->integer('educationlevelid',5);
            $table->string('institutionname')->length(200);
            $table->string('location')->length(500);
            $table->string('major')->length(100)->nullable();
            $table->decimal('GPA')->length(10,0);
            $table->string('yearentry')->length(4);
            $table->string('yeargraduation')->length(4);
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
        Schema::dropIfExists('formaleducation');
    }
}
