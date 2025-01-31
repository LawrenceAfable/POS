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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id('transaction_id'); // Primary key
            $table->unsignedBigInteger('order_id'); // Foreign key
            $table->string('payment_method'); // Payment method (e.g., Cash, Credit Card)
            $table->decimal('amount_paid', 10, 2); // Amount paid
            $table->decimal('change_due', 10, 2)->nullable(); // Change due
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('order_id')->references('order_id')->on('orders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
