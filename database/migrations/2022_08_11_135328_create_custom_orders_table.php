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
        Schema::create('custom_orders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('contact');
            $table->string('email');
            $table->string('size');
            $table->string('layers');
            $table->string('flavour');
            $table->string('color1');
            $table->string('color2');
            $table->string('inscription');
            $table->string('delivery_type');
            $table->string('delivery_location');
            $table->string('delivery_date');
            $table->string('delivery_time');
            $table->text('additional_info');
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
        Schema::dropIfExists('custom_orders');
    }
};
