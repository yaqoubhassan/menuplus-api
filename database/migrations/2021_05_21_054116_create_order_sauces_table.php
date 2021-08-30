<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderSaucesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_sauces', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_item_id');
            $table->unsignedBigInteger('sauce_id');
            $table->timestamps();
            $table->unique(['order_item_id', 'sauce_id']);

            $table
                ->foreign('order_item_id')
                ->references('id')
                ->on('order_items')->onDelete('cascade');
            $table
                ->foreign('sauce_id')
                ->references('id')
                ->on('sauces');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_sauces');
    }
}
