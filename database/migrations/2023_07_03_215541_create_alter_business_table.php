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
        Schema::table('businesses', function (Blueprint $table) {
            $table->string('start_time')->nullable();
            $table->string('stop_time')->nullable();
            $table->string('days')->nullable();
            $table->string('website')->nullable();
            $table->string('ios')->nullable();
            $table->string('apk')->nullable();
            $table->text('map')->nullable();
            $table->integer('is_certified')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alter_business');
    }
};
