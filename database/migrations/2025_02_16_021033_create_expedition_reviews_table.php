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
        Schema::create('expedition_reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mountain_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('email');
            $table->string('photo')->nullable();
            $table->string('youtube_url')->nullable();
            $table->integer('rating');
            $table->text('review');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expedition_reviews');
    }
};
