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
        Schema::create('expeditionfaqs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mountain_id');
            $table->string('question');
            $table->text('answer');
            $table->string('slug')->unique();
            $table->foreign('mountain_id')->references('id')->on('mountains')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expeditionfaqs');
    }
};
