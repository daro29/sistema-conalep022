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
            $table->string('enrollment');
            $table->string('name');
            $table->string('password');
            $table->enum('role', ['admin', 'student', 'teacher'])->default('student');


            $table->unsignedBigInteger('subjects_id')->nullable();
            $table->foreign('subjects_id')
            ->references('id')
            ->on('subjects');

            $table->unsignedBigInteger('groups_id')->nullable();
            $table->foreign('groups_id')
            ->references('id')
            ->on('groups');

            $table->unsignedBigInteger('assistances_id')->nullable();
            $table->foreign('assistances_id')
            ->references('id')
            ->on('assistances');

            $table->unsignedBigInteger('semesters_id')->nullable();
            $table->foreign('semesters_id')
            ->references('id')
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
