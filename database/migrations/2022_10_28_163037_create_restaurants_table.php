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
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->string('lat');
            $table->string('lng');
            $table->bigInteger('tax_registration_number');
            $table->integer('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->text('logo');
            $table->text('address');
            $table->timestamp('open_at');
            $table->timestamp('close_at');
            $table->string('password');
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
        Schema::dropIfExists('restaurants');
    }
};
