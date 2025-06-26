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
        Schema::create('video_galleries', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Title of the video
            $table->text('description')->nullable(); // Optional description
            $table->string('video_url'); // URL of the video (e.g., YouTube embed link)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('video_galleries');
    }
};
