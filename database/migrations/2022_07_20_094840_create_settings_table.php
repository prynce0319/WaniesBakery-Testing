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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('image')->nullable();
            $table->string('email')->default("email@gmail.com")->nullable();
            $table->string('phone');
            $table->string('phone2');
            $table->string('address');
            $table->string('map', 500)->default("https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4046755.8932582396!2d-1.0304069499999997!3d7.904465449999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfd75acda8dad6c7%3A0x54d7f230d093d236!2sGhana!5e0!3m2!1sen!2sgh!4v1676125968196!5m2!1sen!2sgh");
            $table->string('twitter')->default("twitter@gmail.com")->nullable();
            $table->string('facebook')->default("facebook@gmail.com")->nullable();
            $table->string('pinterest')->default("pinterest@gmail.com")->nullable();
            $table->string('instagram')->default("insta@gmail.com")->nullable();
            $table->string('youtube')->default("youtube.com")->nullable();
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
        Schema::dropIfExists('settings');
    }
};
