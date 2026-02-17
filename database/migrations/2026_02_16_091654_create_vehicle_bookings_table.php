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
        Schema::create('vehicle_bookings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone', 20);
            $table->string('pickup_location');
            $table->string('destination');
            $table->dateTime('check_in');
            $table->dateTime('return_time');
            $table->integer('vehicle_id'); 
            $table->string('passengers');
            $table->text('message')->nullable(); // optional message
            $table->integer('status')->nullable();
            $table->timestamps();

          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicle_bookings');
    }
};
