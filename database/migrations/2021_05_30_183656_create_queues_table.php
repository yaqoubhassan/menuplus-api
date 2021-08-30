<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQueuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('queues', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->integer('party_size');
            $table->string('phone_number');
            $table->unsignedBigInteger('dinning_area_id');
            $table->boolean('status')->default(true);
            $table->timestamps();

            $table->foreign('dinning_area_id')->references('id')->on('dining_areas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('queues');
    }
}
