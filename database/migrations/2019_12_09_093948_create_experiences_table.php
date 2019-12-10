<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experience', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('position');
            $table->string('workplace');
            $table->string('period');
            $table->string('responsibilities');
            $table->string('stack')->nullable();
            $table->bigInteger('person_id')->unsigned();
            $table->foreign('person_id')->references('id')->on('person');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('experience');
    }
}
