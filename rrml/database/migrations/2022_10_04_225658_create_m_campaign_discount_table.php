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
        Schema::create('m_campaign_discount', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('campaign_id');
            $table->string('name',255);
            $table->unsignedTinyInteger('conditions_min');
            $table->unsignedTinyInteger('conditions_max');
            $table->float('discount rate');
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
        Schema::dropIfExists('m_campaign_discount');
    }
};
