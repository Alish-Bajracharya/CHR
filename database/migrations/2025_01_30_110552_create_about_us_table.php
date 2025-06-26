<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->string('short_description');  // Short description of the About Us section
            $table->text('long_description');  // Full description
            $table->string('feature_image')->nullable();  // Feature image
            $table->string('main_image')->nullable();  // Main image (for the home page)
            $table->json('carousel_images')->nullable();  // Carousel images
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us');
    }
};
