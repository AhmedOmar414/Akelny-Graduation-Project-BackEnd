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
            $table->string('restaurant_name');
            $table->string('logo');
            $table->string('address');
            $table->string('lat');
            $table->string('lng');
            $table->bigInteger('tax_registration_number');
            $table->timestamp('open_at')->default('2023-05-01 09:00:00');
            $table->timestamp('close_at')->default('2023-05-05 017:00:00');
            $table->tinyInteger('status')->default(true);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
