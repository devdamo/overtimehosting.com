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
        Schema::create('job_applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_listing_id')->constrained('job_listings')->onDelete('cascade');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone');
            $table->string('location_city');
            $table->string('location_country');
            $table->string('cv_path');
            $table->string('portfolio_url')->nullable();
            $table->text('additional_info')->nullable();
            $table->string('linkedin_profile')->nullable();
            $table->string('referral_source')->nullable();
            $table->string('work_authorization_uk');
            $table->string('located_in_uk');
            $table->json('education')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('job_applications');
    }
};
