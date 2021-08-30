<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('order_items', function (Blueprint $table) {
            $table->dropColumn(['sauce_ids', 'toppings_ids', 'side_dish_ids', 'side_dish_Qtys', 'cost']);
            $table->string('special_request')->nullable()->change();
            $table->bigInteger('cooking_preference_id')->unsigned()->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('order_items', function (Blueprint $table) {
            $table->string('side_dish_ids');
            $table->string('side_dish_Qtys');
            $table->string('toppings_ids');
            $table->string('sauce_ids');
            $table->double('cost');
        });
        
    }
}
