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
            $table->bigIncrements('id_observacion');
            $table->string('descripcion');

            $table->unsignedBigInteger('alumno_id');
            $table->foreign('alumno_id')
            ->references('id')
            ->on('students');

            $table->unsignedBigInteger('docente_id');
            $table->foreign('docente_id')
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
