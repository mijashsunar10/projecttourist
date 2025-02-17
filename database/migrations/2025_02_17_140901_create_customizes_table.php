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
        Schema::create('customizes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('country');
            $table->string('phone')->nullable();
            $table->string('trek_name')->nullable();
            $table->string('region')->nullable();
            $table->integer('no_of_people')->nullable();
            $table->string('budget')->nullable();
            $table->date('travel_date')->nullable();
            $table->integer('duration')->nullable();
            $table->string('hotel_accommodation')->nullable();
            $table->string('guide_porter')->nullable();
            $table->text('message')->nullable();
            // Add the is_read column immediately after message.
            $table->boolean('is_read')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customizes');
    }
};
