<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->bigIncrements('id_asignatura');
            $table->string('nombre');
            $table->string('clave');

            $table->unsignedBigInteger('asistencia_id')->nullable();
            $table->foreign('asistencia_id')
            ->references('id_asistencia')
            ->on('assistances');

            $table->unsignedBigInteger('periodo_id')->nullable();
            $table->foreign('periodo_id')
            ->references('id_periodo')
            ->on('periods');

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
        Schema::dropIfExists('subjects');
    }
}
