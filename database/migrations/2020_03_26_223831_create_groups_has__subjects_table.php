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

            $table->unsignedBigInteger('groups_id');
            $table->foreign('groups_id')
            ->references('id')
            ->on('groups');

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
        Schema::dropIfExists('groups_has__subjects');
    }
}
