<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderSideDishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_side_dishes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_item_id');
            $table->unsignedBigInteger('side_dish_id');
            $table->double('side_dish_quantity', 2, 0)->default(0);
            $table->timestamps();
            $table->unique(['order_item_id', 'side_dish_id']);

            $table
                ->foreign('order_item_id')
                ->references('id')
                ->on('order_items')->onDelete('cascade');
            $table
                ->foreign('side_dish_id')
                ->references('id')
                ->on('side_dishes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_side_dishes');
    }
}
