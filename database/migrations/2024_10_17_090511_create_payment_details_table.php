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
        Schema::create('payment_details', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->foreignId('order_id')->constrained('orders')->onDelete('cascade'); // Foreign key to orders
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Foreign key to users
            $table->boolean('payment_method'); // Payment method (boolean)
            $table->decimal('amount', 10, 2); // Amount (10 digits total, 2 after decimal)
            $table->string('transaction_id')->unique(); // Unique transaction ID
            $table->boolean('status')->default(false); // Status (boolean) with a default value
            $table->text('payment_details')->nullable(); // Additional payment details (nullable)
            $table->timestamps(); // created_at and updated_at timestamps
            $table->softDeletes(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_details');
    }
};
