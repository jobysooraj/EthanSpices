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
        Schema::create('discounts', function (Blueprint $table) {
            $table->id();
            $table->string('name');  // Discount name
            $table->decimal('amount', 8, 2);  // Discount amount
            $table->enum('discount_type', ['fixed', 'percentage']);  // Discount type
            $table->timestamp('valid_from')->nullable();  // Validity start date
            $table->timestamp('valid_until')->nullable();  // Validity end date
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discounts');
    }
};
