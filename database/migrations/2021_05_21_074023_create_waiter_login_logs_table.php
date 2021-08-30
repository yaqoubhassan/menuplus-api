<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWaiterLoginLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('waiter_login_logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('waiter_id');
            $table->datetime('last_login_at');
            $table->timestamps();

            $table
                ->foreign('waiter_id')
                ->references('id')
                ->on('waiters')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('waiter_login_logs');
    }
}
