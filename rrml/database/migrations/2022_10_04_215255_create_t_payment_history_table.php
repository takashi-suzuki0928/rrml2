<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_payment_history', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('payment_id')->unique();
            $table->unsignedBigInteger('user_id')->unique();
            $table->unsignedTinyInteger('payment_method');
            $table->unsignedTinyInteger('payment_details');
            $table->unsignedTinyInteger('process_type');
            $table->unsignedTinyInteger('payment_result');
            $table->unsignedInteger('payment_amount');
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
        Schema::dropIfExists('t_payment_history');
    }
};
