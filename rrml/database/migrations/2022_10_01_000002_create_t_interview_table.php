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
        Schema::create('t_interview', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lodging_id');
            $table->unsignedBigInteger('guest_id');
            $table->string('answer_01',255);
            $table->date('answer_02');
            $table->boolean('answer_03');
            $table->string('answer_04',255)->nullable();
            $table->boolean('answer_05');
            $table->string('answer_06',255)->nullable();
            $table->boolean('answer_07');
            $table->string('answer_08',255)->nullable();
            $table->boolean('answer_09');
            $table->string('answer_10',255)->nullable();
            $table->boolean('answer_11');
            $table->string('answer_12',255)->nullable();
            $table->string('answer_13',255)->nullable();
            $table->string('answer_13_t',255)->nullable();
            $table->boolean('answer_14');
            $table->boolean('answer_15');
            $table->string('answer_16',255)->nullable();
            $table->string('answer_16_t',255)->nullable();
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
        Schema::dropIfExists('t_interview');
    }
};
