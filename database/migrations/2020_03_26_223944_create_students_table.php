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

            $table->id();
            $table->string('enrollment');
            $table->string('name');
            $table->string('password')->nullable();
            $table->enum('role', ['admin', 'student', 'teacher'])->default('student');

            $table->unsignedBigInteger('groups_id')->nullable();
            $table->foreign('groups_id')
            ->references('id')
            ->on('groups');

            $table->foreignId('career_id')->nullable()
            ->constrained()
            ->onDelete('cascade');

            $table->unsignedBigInteger('assistance_id')->nullable();
            $table->foreign('assistance_id')
            ->references('id')
            ->on('assistances');

            $table->unsignedBigInteger('semester_id')->nullable();
            $table->foreign('semester_id')
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
