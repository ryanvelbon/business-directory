<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            
            $table->id();

            $table->string('name', 70);
            $table->string('slogan', 70);
            $table->string('description', 200);

            // *PENDING* address
            // *PENDING* zip
            // *PENDING* city
            $table->unsignedBigInteger('country_id');

            $table->string('website', 100);
            $table->string('email')->unique();
            $table->string('phone', 15);

            $table->unsignedBigInteger('owner_id');
            
            // *PENDING* created_by

            $table->timestamps();

            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('owner_id')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('companies');
    }
};
