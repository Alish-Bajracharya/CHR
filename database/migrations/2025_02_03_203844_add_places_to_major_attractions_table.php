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
        Schema::table('major_attractions', function (Blueprint $table) {
            $table->json('places')->nullable()->after('images'); // Adding places field after images
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('major_attractions', function (Blueprint $table) {
            $table->dropColumn('places');
        });
    }
};
