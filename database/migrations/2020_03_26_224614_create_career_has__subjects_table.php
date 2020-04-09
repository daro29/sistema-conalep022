<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareerHasSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('career_has_subjects', function (Blueprint $table) {

            $table->unsignedBigInteger('carrera_id');
            $table->foreign('carrera_id')
            ->references('id_carrera')
            ->on('careers');

            $table->unsignedBigInteger('asignatura_id');
            $table->foreign('asignatura_id')
            ->references('id_asignatura')
            ->on('subjects');

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
        Schema::dropIfExists('career_has__subjects');
    }
}
