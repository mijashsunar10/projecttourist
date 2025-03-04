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
            $table->unsignedBigInteger('region_id'); // Foreign key for region
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('price');
            $table->string('duration');
            $table->string('distance');
            $table->string('ascent');
            
            $table->timestamps();
        
            $table->foreign('region_id')->references('id')->on('regions')->onDelete('cascade');
        
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
