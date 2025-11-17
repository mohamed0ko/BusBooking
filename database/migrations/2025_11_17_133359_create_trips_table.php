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
        Schema::create('trips', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('bus_id');
            $table->foreign('bus_id')->references('id')->on('buses')->cascadeOnDelete();

            $table->unsignedBigInteger('from_city');
            $table->foreign('from_city')->references('id')->on('cities');

            $table->unsignedBigInteger('to_city');
            $table->foreign('to_city')->references('id')->on('cities');

            $table->date('date');
            $table->time('time');
            $table->float('price');
            $table->float('discount')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trips');
    }
};
