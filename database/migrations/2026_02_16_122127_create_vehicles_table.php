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
        Schema::create('vehicles', function (Blueprint $table) {
             $table->id();

            $table->string('name');              // Example: Toyota KDH, Car, Van
            $table->string('vehicle_number')->unique(); // Plate number
            $table->string('type')->nullable();  // Car / Van / Bus
            $table->unsignedInteger('seats');    // Passenger capacity

            $table->decimal('price_per_km', 10, 2)->nullable();
            $table->decimal('price_per_day', 10, 2)->nullable();

            $table->text('notes')->nullable();

            $table->boolean('status')->default(1); // 1 = Active, 0 = Inactive

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
