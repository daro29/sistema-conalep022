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

            $table->unsignedBigInteger('students_id');
            $table->foreign('students_id')
            ->references('id')
            ->on('students');

            $table->unsignedBigInteger('subjects_id');
            $table->foreign('subjects_id')
            ->references('id')
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
