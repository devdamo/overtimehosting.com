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
        Schema::create('legal_pages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->enum('type', ['Terms and Conditions', 'Privacy Policy', 'Cookies Notice']);
            $table->text('content'); // Markdown content
            $table->timestamps();
            $table->timestamp('effective_date')->nullable(); // When the version becomes effective
        });
    }

    public function down()
    {
        Schema::dropIfExists('legal_pages');
    }

};
