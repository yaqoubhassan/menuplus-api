<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterDinnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dinners', function (Blueprint $table) {
            $table->unsignedBigInteger('temp_restaurant_id')->nullable();
            $table->string('profile_pic')->nullable()->change();

            $table->foreign('temp_restaurant_id')
                  ->references('id')
                  ->on('restaurants');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dinners', function (Blueprint $table) {
            $table->dropForeign('dinners_temp_restaurant_id_foreign');
            $table->dropColumn('temp_restaurant_id');
            $table->string('profile_pic')->change();
        });
    }
}
