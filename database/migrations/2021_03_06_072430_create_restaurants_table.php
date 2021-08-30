<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('address');
            $table->string('phone_number');
            $table->string('email');
            $table->enum('subscription',['monthly', 'quarterly', 'annually']);
            $table->boolean('status')->nullable();
            $table->unsignedbigInteger('capacity')->nullable();
            $table->mediumText('description')->nullable();
            $table->string('logo');
            $table->string('staff_qr_key')->nullable();
            $table->string('customer_qr_key')->nullable();
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
        Schema::dropIfExists('restaurants');
    }
}
