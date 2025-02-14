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
        Schema::create('expedition_facts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mountain_id')->constrained()->onDelete('cascade');
            $table->string('duration');
            $table->string('difficulty');
            $table->string('start_end');
            $table->string('best_season');
            $table->string('area');
            $table->string('max_elevation');
            $table->string('per_day_walk');
            $table->string('group_size');
            $table->string('accommodation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expedition_facts');
    }
};
