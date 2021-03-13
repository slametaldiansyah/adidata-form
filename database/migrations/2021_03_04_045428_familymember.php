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
            $table->id()->length(11);
            $table->foreignId('familyid')->constrained('family')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('familystatusid')->constrained('familystatus')->onDelete('cascade')->onUpdate('cascade');
            $table->string('name')->length(60);
            $table->foreignId('sexid')->constrained('sex')->onDelete('cascade')->onUpdate('cascade');
            $table->date('birthdate')->nullable();
            $table->foreignId('educationlevelid')->constrained('education')->onDelete('cascade')->onUpdate('cascade');
            $table->string('profession')->length(60);
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
        Schema::dropIfExists('familymember');
    }
}
