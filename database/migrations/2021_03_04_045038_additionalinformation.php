<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Additionalinformation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('additionalinformation', function (Blueprint $table) {
            $table->id();
            $table->foreignId('candidateid')->length(11)->constrained('candidate')->onDelete('cascade')->onUpdate('cascade');
            $table->string('vacancyinfosource')->length(100);
            $table->tinyinteger('hospitalizestatus')->length(1);
            $table->string('hospitalisereason')->length(50);
            $table->string('strenght')->length(300);
            $table->string('weakness')->length(300);
            $table->string('overcomeweakness')->length(300);
            $table->biginteger('expectedsalary')->length(20);
            $table->string('expectedreadytojoindate')->length(200);
            $table->tinyinteger('pledgeoftruthness')->length(1);
            $table->foreignId('positionid')->constrained('position')->onDelete('cascade')->onUpdate('cascade');
            // $table->string('position')->length(5);
            $table->string('jobcode')->length(50)->nullable();
            $table->foreignId('jobdurationid')->nullable()->constrained('jobduration')->onDelete('cascade')->onUpdate('cascade');
            // $table->string('jobdurationid')->length(10);
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
        Schema::dropIfExists('additionalinformation');
    }
}
