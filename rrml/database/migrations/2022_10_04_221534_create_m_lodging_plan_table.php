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
        Schema::create('m_lodging_plan', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->unsignedTinyInteger('days_min');
            $table->unsignedTinyInteger('days_max');
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
        Schema::dropIfExists('m_lodging_plan');
    }
};
