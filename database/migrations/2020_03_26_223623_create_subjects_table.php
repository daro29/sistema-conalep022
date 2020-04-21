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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('code');

            $table->unsignedBigInteger('assistances_id')->nullable();
            $table->foreign('assistances_id')
            ->references('id')
            ->on('assistances');

            $table->unsignedBigInteger('periods_id')->nullable();
            $table->foreign('periods_id')
            ->references('id')
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
