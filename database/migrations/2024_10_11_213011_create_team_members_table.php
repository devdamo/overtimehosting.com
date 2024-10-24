<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamMembersTable extends Migration
{
    public function up()
    {
        Schema::create('team_members', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique(); // Unique slug for URL
            $table->string('username')->unique(); // Username
            $table->string('display_name'); // Display name
            $table->string('company_role'); // Role in the company
            $table->string('logo')->nullable(); // Team member logo/avatar
            $table->text('about_me'); // About me section
            $table->json('links')->nullable(); // Links as JSON (multiple links with custom names)
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('team_members');
    }
}
