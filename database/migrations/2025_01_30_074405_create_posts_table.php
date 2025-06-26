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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Title of the blog post
            $table->text('short_description'); // Short description for the blog list page
            $table->text('content'); // Full content for the blog detail page
            $table->string('image')->nullable(); // Featured image for the blog post
            $table->date('published_at')->nullable(); // Publication date
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
