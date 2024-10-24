<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideoArticlesTable extends Migration
{
    public function up()
    {
        Schema::create('video_articles', function (Blueprint $table) {
            $table->id();
            $table->string('article_creator');
            $table->date('date_made');
            $table->string('title');
            $table->text('description');
            $table->string('category'); // e.g., "Settings", "Config", etc.
            $table->integer('how_long_to_read'); // in minutes
            $table->text('markdown_body');
            $table->string('video_upload'); // path to the video
            $table->string('bg_image')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('video_articles');
    }
}
