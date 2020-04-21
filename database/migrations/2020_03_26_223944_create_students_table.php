<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->string('nombre');

            $table->unsignedBigInteger('asignatura_id');
            $table->foreign('asignatura_id')
            ->references('id_asignatura')
            ->on('subjects');

            $table->unsignedBigInteger('grupos_id');
            $table->foreign('grupos_id')
            ->references('id_grupo')
            ->on('groups');

            $table->unsignedBigInteger('asistencia_id');
            $table->foreign('asistencia_id')
            ->references('id_asistencia')
            ->on('assistances');

            $table->unsignedBigInteger('semestre_id');
            $table->foreign('semestre_id')
            ->references('id_semestre')
            ->on('semesters');


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
        Schema::dropIfExists('students');
    }
}
