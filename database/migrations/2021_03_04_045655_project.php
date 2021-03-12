<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Project extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('project', function (Blueprint $table) {
            $table->id()->length(11);
            $table->foreignId('workexperienceid')->constrained('workexperience')->onDelete('cascade')->onUpdate('cascade');
            $table->string('name')->length(50);
            $table->string('position')->length(50);
            $table->string('division')->length(50);
            $table->string('jobdescription')->length(300);
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
        Schema::dropIfExists('project');
    }
}
