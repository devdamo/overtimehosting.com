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
        Schema::create('server_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('node_id');
            $table->string('egg_name');
            $table->integer('ram');
            $table->integer('cpu');
            $table->integer('storage');
            $table->string('reason');
            $table->string('server_id')->nullable(); // Stores the ID of the server when created on Pterodactyl
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('server_requests');
    }
};
