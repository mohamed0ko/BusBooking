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
        Schema::create('buses', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('id')->on('bus_companies')->cascadeOnDelete();

            $table->integer('numberBus');
            $table->integer('seats');
            $table->json('comforts')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buses');
    }
};
