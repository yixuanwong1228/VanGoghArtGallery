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
        Schema::create('artists', function (Blueprint $table) {
            $table->string('id')->primary(); // Primary key as string
            $table->string('name');
            $table->string('profilePictureURL')->nullable();
            $table->text('intro')->nullable();
            $table->date('birthdate')->nullable();
            $table->date('deathdate')->nullable();
            $table->string('nationality')->nullable();
            $table->string('birthplace')->nullable();
            $table->string('deathplace')->nullable();
            $table->integer('deathage')->nullable();
            $table->string('occupation')->nullable();
            $table->string('artmovement')->nullable();
            $table->text('story')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artists');
    }
};
