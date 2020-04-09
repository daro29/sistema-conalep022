<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->bigIncrements('id_grupo');
            $table->string('clave');

            $table->unsignedBigInteger('carrera_id')->nullable();
            $table->foreign('carrera_id')
            ->references('id_carrera')
            ->on('careers');

            $table->unsignedBigInteger('asignatura_id')->nullable();
            $table->foreign('asignatura_id')
            ->references('id_asignatura')
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
        Schema::dropIfExists('groups');
    }
}
