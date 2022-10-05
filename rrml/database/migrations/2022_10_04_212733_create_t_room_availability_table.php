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
        Schema::create('t_room_availability', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('room_block_id')->unique();
            $table->date('target date');
            $table->unsignedTinyInteger('reason');
            $table->unsignedTinyInteger('reserve_sts');
            $table->unsignedBigInteger('lodging_id');
            $table->unsignedBigInteger('guest_id');
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
        Schema::dropIfExists('t_room_availability');
    }
};
