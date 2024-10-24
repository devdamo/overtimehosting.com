<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGameArticlesTable extends Migration
{
    public function up()
    {
        Schema::create('game_articles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('article_creator'); // Assuming you're storing the user's ID
            $table->string('title');
            $table->text('description');
            $table->string('category');
            $table->integer('how_long_to_read');
            $table->text('markdown_body');
            $table->string('bg_image')->nullable();
            $table->timestamps();

            // Foreign key constraint if you want to link it to the users table
            $table->foreign('article_creator')->references('id')->on('users')->onDelete('cascade');
        });

    }

    public function down()
    {
        Schema::dropIfExists('game_articles');
    }
}
