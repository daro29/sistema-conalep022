<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('observations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('description');

            $table->unsignedBigInteger('students_id');
            $table->foreign('students_id')
            ->references('id')
            ->on('students');

            $table->unsignedBigInteger('teachers_id');
            $table->foreign('teachers_id')
            ->references('id')
            ->on('teachers');

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
        Schema::dropIfExists('observations');
    }
}
