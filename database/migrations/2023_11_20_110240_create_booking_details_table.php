<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('booking_details', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phoneNumber', 20); // Change the data type to string
            $table->string('email');
            $table->string('pickLocation');
            $table->string('destination');
            $table->string('noHour')->nullable();
            $table->string('rideType');
            $table->double('noPassenger')->nullable();
            $table->double('noSuitcase')->nullable();
            $table->string('flightNumber')->nullable();
            $table->string('nameBoard')->nullable();
            $table->string('additionalRequirments')->nullable();
            $table->string('carname');
            $table->double('fare', 10, 2);
            $table->string('pickTime');
            $table->string('pickDate');
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking_details');
    }
};
