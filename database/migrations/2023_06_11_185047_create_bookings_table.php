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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('refNumber')->nullable();
            $table->dateTime('booking_date')->nullable();            
            $table->date('check_in')->nullable();
            $table->date('check_out')->nullable();
            $table->float('total_days')->default(0);
            $table->float('downpayment')->default(0);
            $table->float('subtotal')->default(0);
            $table->integer('discount')->default(0);
            $table->float('total_price')->default(0);

            $table->string('payment_method')->nullable();
            $table->string('payment_status')->nullable();

            $table->string('firstName')->nullable();
            $table->string('lastName')->nullable();
            $table->string('email')->nullable();
            $table->string('confirmEmail')->nullable();
            $table->string('mobileNumber')->nullable();
            $table->string('destination')->nullable();
            $table->string('flightNumber')->nullable();
            $table->string('typeOfCar')->nullable();
            $table->string('plateNumber')->nullable();
            
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
