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
        Schema::create('subscription_features', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('subscription_id')->nullable();
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->float('price', 9,2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscription_features');
    }
};
