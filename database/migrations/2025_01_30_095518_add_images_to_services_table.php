<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::table('services', function (Blueprint $table) {
            $table->string('featured_image')->nullable()->after('long_description'); // Featured Image
            $table->json('carousel_images')->nullable()->after('featured_image'); // Store carousel images as JSON
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn(['featured_image', 'carousel_images']);
        });
    }
};
