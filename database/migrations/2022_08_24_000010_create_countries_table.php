<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->char('iso', 2);
            $table->string('name', 80);
            $table->string('nicename', 80);
            $table->char('iso3', 3)->nullable();
            $table->unsignedSmallInteger('numcode')->nullable();
            $table->integer('phonecode');
            $table->unsignedTinyInteger('phone_nsn')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('countries');
    }
};
