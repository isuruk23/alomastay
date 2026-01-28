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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('no')->nullable();
            $table->string('intro')->nullable();
            $table->string('overview')->nullable();
            $table->decimal('price', 10)->nullable();
            $table->string('size')->nullable();
            $table->string('bed')->nullable();
            $table->string('occupancy')->nullable();
            $table->string('view')->nullable();
            $table->string('floor')->nullable();
            $table->string('image')->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
