<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentHasSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_has_subjects', function (Blueprint $table) {

            $table->unsignedBigInteger('alumno_id');
            $table->foreign('alumno_id')
            ->references('id_matricula')
            ->on('students');

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
        Schema::dropIfExists('student_has__subjects');
    }
}
