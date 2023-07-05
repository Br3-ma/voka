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
        Schema::create('business_assets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('desc')->nullable();
            $table->string('path')->nullable();
            $table->string('type')->nullable(); //video or image
            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('business_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business_assets');
    }
};
