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
        Schema::create('major_attractions', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('category'); // "Local Interaction, Major Attraction, Nature Exploration"
            $table->text('short_description');
            $table->longText('long_description');
            $table->string('location')->nullable();
            $table->string('image'); // Single main image
            $table->json('images')->nullable(); // Multiple images for carousel
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('major_attractions');
    }
};
