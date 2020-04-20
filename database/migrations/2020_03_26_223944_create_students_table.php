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
            $table->string('matricula');
            $table->string('name');
            $table->string('password');
            $table->enum('role', ['admin', 'student', 'teacher'])->default('student');


            $table->unsignedBigInteger('asignatura_id')->nullable();
            $table->foreign('asignatura_id')
            ->references('id_asignatura')
            ->on('subjects');

            $table->unsignedBigInteger('grupos_id')->nullable();
            $table->foreign('grupos_id')
            ->references('id_grupo')
            ->on('groups');

            $table->unsignedBigInteger('asistencia_id')->nullable();
            $table->foreign('asistencia_id')
            ->references('id_asistencia')
            ->on('assistances');

            $table->unsignedBigInteger('semestre_id')->nullable();
            $table->foreign('semestre_id')
            ->references('id_semestre')
            ->on('semesters');

            $table->rememberToken();
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
