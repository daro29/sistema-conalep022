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

            $table->unsignedBigInteger('teachers_id');
            $table->foreign('teachers_id')
            ->references('id')
            ->on('teachers');

            $table->unsignedBigInteger('groups_id');
            $table->foreign('groups_id')
            ->references('id')
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
