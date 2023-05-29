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
        Schema::create('business_reviews', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('business_id')->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->float('rating', 9,2)->nullable();
            $table->longText('review')->nullable();
            $table->float('max_rating', 9,2)->nullable();
            $table->integer('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business_reviews');
    }
};
