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

            $table->unsignedBigInteger('teachers_id');
            $table->foreign('teachers_id')
            ->references('id')
            ->on('teachers');

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
        Schema::dropIfExists('teacher_has__subjects');
    }
}
