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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price', 8, 2);
            $table->string('logo')->nullable();     // Path to product logo image
            $table->string('bg_logo')->nullable();  // Path to product background logo image
            $table->text('product_description');
            $table->text('features')->nullable();
            $table->text('important_info')->nullable();
            $table->text('long_description');
            $table->text('quick_description');
            $table->integer('star_rating');
            $table->decimal('sale', 8, 2)->nullable();
            $table->string('cpu');
            $table->string('seller');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['logo', 'bg_logo']);
        });
    }
};
