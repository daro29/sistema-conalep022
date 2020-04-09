<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherHasSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_has_subjects', function (Blueprint $table) {

            $table->unsignedBigInteger('docente_id');
            $table->foreign('docente_id')
            ->references('id_docente')
            ->on('teachers');

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
        Schema::dropIfExists('teacher_has__subjects');
    }
}
