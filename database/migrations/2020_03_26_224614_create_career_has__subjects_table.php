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

            $table->unsignedBigInteger('careers_id');
            $table->foreign('careers_id')
            ->references('id')
            ->on('careers');

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
        Schema::dropIfExists('career_has__subjects');
    }
}
