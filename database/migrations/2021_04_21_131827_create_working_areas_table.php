<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkingAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('working_areas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('waiter_id');
            $table->foreign('waiter_id')->references('id')->on('waiters')->onDelete('cascade');
            $table->unsignedBigInteger('dining_area_id');
            $table->foreign('dining_area_id')->references('id')->on('dining_areas')->onDelete('cascade');
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
        Schema::dropIfExists('working_areas');
    }
}
