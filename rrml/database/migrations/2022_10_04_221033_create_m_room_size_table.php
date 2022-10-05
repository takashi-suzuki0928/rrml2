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
        Schema::create('m_room_size', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('room_block_id')->unique();
            $table->string('name',255);
            $table->unsignedInteger('unit_price');
            $table->unsignedBigInteger('branch');
            $table->boolean('enable_flag');
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
        Schema::dropIfExists('m_room_size');
    }
};
