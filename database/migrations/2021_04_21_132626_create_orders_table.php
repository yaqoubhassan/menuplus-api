<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dinner_id');
            $table->foreign('dinner_id')->references('id')->on('dinners')->onDelete('cascade');
            $table->unsignedBigInteger('restaurant_id');
            $table->foreign('restaurant_id')->references('id')->on('restaurants')->onDelete('cascade');
            $table->unsignedBigInteger('waiter_id')->nullable();
            $table->foreign('waiter_id')->references('id')->on('waiters');
            $table->double('total_cost');
            $table->boolean('verified');
            $table->enum('payment',['billed', 'not-payed', 'payed']);
            $table->enum('service',['not-served', 'entree', 'main', 'desert', 'complete']);
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
        Schema::dropIfExists('orders');
    }
}
