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
            $table->string('artistID')->nullable();

            // Assuming `artists` table has an `id` column as the primary key
            $table->foreign('artistID')->references('id')->on('artists')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('art_works', function (Blueprint $table) {
            Schema::table('art_works', function (Blueprint $table) {
                $table->dropForeign(['artistID']);
                $table->dropColumn('artistID');
            });
        });
    }
};
