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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->tinyInteger('user_type');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('family_name',32);
            $table->string('first_name',32);
            $table->string('family_name_kana',32);
            $table->string('first_name_kana',32);
            $table->string('postcode',8);
            $table->string('address_pref',8);
            $table->string('address_city',64);
            $table->string('address_bld',32)->nullable();
            $table->string('tel',16)->nullable();
            $table->date('birth_date')->nullable();
            $table->string('introduction_code',255)->nullable();
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
        Schema::dropIfExists('users');
    }
};
