<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('genre_id')->unsigned();
            $table->integer('opening_year');
            $table->integer('opening_month');
            $table->integer('opening_day');
            $table->string('postal_code');
            $table->string('prefecture');
            $table->string('address');
            $table->string('building_name');
            $table->string('phone_number');
            $table->string('email');
            $table->string('image_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stores');
    }
};
