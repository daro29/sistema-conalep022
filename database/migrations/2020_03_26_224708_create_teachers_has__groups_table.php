<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersHasGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers_has_groups', function (Blueprint $table) {

            $table->unsignedBigInteger('docente_id');
            $table->foreign('docente_id')
            ->references('id_docente')
            ->on('teachers');

            $table->unsignedBigInteger('grupo_id');
            $table->foreign('grupo_id')
            ->references('id_grupo')
            ->on('groups');

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
        Schema::dropIfExists('teachers_has__groups');
    }
}
