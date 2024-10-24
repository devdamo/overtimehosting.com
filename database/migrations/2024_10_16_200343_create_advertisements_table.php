<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/xxxx_xx_xx_create_advertisements_table.php
    public function up()
    {
        Schema::create('advertisements', function (Blueprint $table) {
            $table->id();
            $table->string('type'); // e.g., 'default', 'illustration', 'floating', 'popup', 'pricing'
            $table->string('title')->nullable(); // Title of the ad
            $table->string('subtitle')->nullable(); // Subtitle or extra text
            $table->text('content')->nullable(); // Markdown content for the ad
            $table->string('image_url')->nullable(); // URL to an image (if applicable)
            $table->string('cta_text')->nullable(); // Call-to-action text
            $table->string('cta_url')->nullable(); // Call-to-action link
            $table->string('location')->nullable(); // Page or section where the ad appears
            $table->boolean('show_globally')->default(false); // Show across the entire website
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('advertisements');
    }
};
