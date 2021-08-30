<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Alter2RestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('restaurants', function(Blueprint $table){
            $table->string('state')->after('name')->nullable();
            $table->string('city')->after('state')->nullable();
            $table->string('suburb')->after('city')->nullable();
            $table->string('post_code')->after('suburb')->default('0061');
            $table->enum('business_type',['Cafe & Takeaway', 'Restaurants', 'Pubs & Clubs', 'Hotels & Service Apartments'])->default('Restaurants')->after('post_code');
            $table->dropColumn('subscription');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('restaurants', function(Blueprint $table){
            $table->enum('subscription',['monthly', 'quarterly', 'annually']);
            $table->dropColumn(['state', 'city', 'suburb', 'post_code', 'subscription_id', 'business_type',]);
        });
    }
}
