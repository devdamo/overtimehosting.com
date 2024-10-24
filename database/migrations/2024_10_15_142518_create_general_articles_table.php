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
        Schema::create('general_articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description');
            $table->integer('how_long_to_read');
            $table->string('bg_image')->nullable();
            $table->text('markdown_body');
            $table->timestamp('date_made')->nullable();
            $table->timestamps();

            // The field for the user who created the article
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // This links to the `users` table.
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general_articles');
    }
};
