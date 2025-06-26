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
        Schema::create('champadevi_infos', function (Blueprint $table) {
            $table->id();
            $table->string('title');  // For the title of the Champadevi attraction
            $table->text('description');  // For a description of the attraction
            $table->string('feature_image')->nullable();  // For the feature image
            $table->json('carousel_images')->nullable();  // For carousel images (stored as JSON)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('champadevi_infos');
    }
};
