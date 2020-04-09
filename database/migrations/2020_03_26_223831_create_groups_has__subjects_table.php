<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsHasSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups_has_subjects', function (Blueprint $table) {

            $table->unsignedBigInteger('grupo_id');
            $table->foreign('grupo_id')
            ->references('id_grupo')
            ->on('groups');

            $table->unsignedBigInteger('asignatura_id');
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
        Schema::dropIfExists('groups_has__subjects');
    }
}
