<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->unsignedBigInteger('dish_id');
            $table->foreign('dish_id')->references('id')->on('dishes');
            $table->string('side_dish_ids');
            $table->string('side_dish_Qtys');
            $table->string('toppings_ids');
            $table->string('sauce_ids');
            $table->integer('quantity');
            $table->unsignedBigInteger('cooking_preference_id');
            $table->foreign('cooking_preference_id')->references('id')->on('cooking_preferences');
            $table->double('cost');
            $table->string('special_request');
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
        Schema::dropIfExists('order_items');
    }
}
