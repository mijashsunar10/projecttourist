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
        Schema::create('tour_required_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tourtrip_id')->constrained('tourtrips')->onDelete('cascade');
            $table->string('item_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tour_required_items');
    }
};
