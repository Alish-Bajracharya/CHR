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
        Schema::create('website_settings', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(); // Website Title
            $table->string('email')->nullable(); // Contact Email
            $table->string('phone')->nullable(); // Contact Number
            $table->string('reservation_email')->nullable(); // Reservation Email
            $table->text('location')->nullable(); // Address
            $table->string('website_logo')->nullable(); // Website Logo
            $table->string('resort_name')->nullable(); // Resort Name
            $table->string('resort_logo')->nullable(); // Resort Logo
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('tripadvisor')->nullable();
            $table->string('pinterest')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('website_settings');
    }
};
