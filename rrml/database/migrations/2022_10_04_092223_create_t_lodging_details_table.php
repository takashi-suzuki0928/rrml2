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
        Schema::create('t_lodging_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('guest_id')->unique();
            $table->unsignedTinyInteger('lodging_sts');
            $table->unsignedBigInteger('plan_id');
            $table->unsignedBigInteger('room_size_id');
            $table->date('checkin_day');
            $table->date('checkout_day');
            $table->boolean('checkin_flg');
            $table->unsignedTinyInteger('stay_days');
            $table->unsignedInteger('subtotal_amount');
            $table->unsignedInteger('discount_amount_campaign')->nullable();
            $table->unsignedInteger('discount_amount_giift')->nullable();
            $table->unsignedInteger('discount_introduction_code')->nullable();
            $table->string('campaign_name',255)->nullable()->nullable();
            $table->string('campaign_discount_name',255)->nullable();
            $table->unsignedBigInteger('used_gift_code_id')->nullable();
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
        Schema::dropIfExists('t_lodging_details');
    }
};
