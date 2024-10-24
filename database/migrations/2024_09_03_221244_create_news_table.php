<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Linking to the users table
            $table->string('title');
            $table->text('description');
            $table->longText('body');
            $table->string('bg_image')->nullable(); // Background image
            $table->string('news_logo')->nullable(); // News type logo
            $table->string('tag')->nullable(); // Single customizable tag
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('news');
    }
}
