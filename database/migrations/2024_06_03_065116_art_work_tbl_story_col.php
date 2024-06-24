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
        Schema::table('art_works', function (Blueprint $table) {
            $table->longText('story')->nullable()->after('description'); // Add the story column after the description column
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('art_works', function (Blueprint $table) {
            $table->dropColumn('story');
        });
    }
};
