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
    Schema::table('galleries', function (Blueprint $table) {
        $table->json('images')->nullable()->after('description'); // Add this
        $table->dropColumn('image'); // Remove the old single image column
    });
}

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('galleries', function (Blueprint $table) {
            $table->dropColumn('images'); // Drop the new column
            $table->string('image')->nullable(); // Re-add the old column
        });
    }
};
