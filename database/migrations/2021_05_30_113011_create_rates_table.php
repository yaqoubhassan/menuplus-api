<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dinner_id');
            $table->unsignedBigInteger('dish_id');
            $table->timestamps();

            $table->unique(['dinner_id', 'dish_id']);

            $table->foreign('dinner_id')
                  ->references('id')
                  ->on('dinners')
                  ->onDelete('cascade');

                  $table->foreign('dish_id')
                  ->references('id')
                  ->on('dishes')
                  ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rates');
    }
}
