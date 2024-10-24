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
        if (!Schema::hasTable('job_listings')) {
            Schema::create('job_listings', function (Blueprint $table) {
                $table->id();
                $table->foreignId('category_id')->constrained('job_categories')->onDelete('cascade');
                $table->string('title');
                $table->string('image_path')->nullable();
                $table->text('short_description');
                $table->longText('full_description');
                $table->string('job_type');
                $table->decimal('pay', 8, 2)->nullable();
                $table->string('additional_pay')->nullable();
                $table->string('benefits')->nullable();
                $table->string('schedule')->nullable();
                $table->string('work_location')->nullable();
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('job_listings');
    }

};
