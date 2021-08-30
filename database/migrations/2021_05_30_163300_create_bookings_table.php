<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('booking_date');
            $table->string('booking_time');
            $table->enum('booking_for', ['Breakfast', 'Lunch', 'High Tea', 'Dinner']);
            $table->integer('party_size');
            $table->string('special_request');
            $table->string('phone_number');
            $table->boolean('status')->default(true);
            $table->unsignedBigInteger('table_id')->nullable();
            $table->timestamps();

            $table->foreign('table_id')->references('id')->on('tables');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
