<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderToppingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_toppings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_item_id');
            $table->unsignedBigInteger('topping_id');
            $table->timestamps();
            $table->unique(['order_item_id', 'topping_id']);

            $table
                ->foreign('order_item_id')
                ->references('id')
                ->on('order_items')->onDelete('cascade');
            $table
                ->foreign('topping_id')
                ->references('id')
                ->on('toppings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_toppings');
    }
}
