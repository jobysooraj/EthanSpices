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
        Schema::create('user_combos', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Foreign key to users table
            $table->foreignId('combo_id')->constrained('combos')->onDelete('cascade'); // Foreign key to combos table
            $table->foreignId('custom_combo_id')->constrained('customize_combos')->onDelete('cascade'); // Foreign key to customize_combos table
            $table->decimal('cgst_amount', 10, 2)->nullable(); // CGST amount, nullable
            $table->decimal('sgst_amount', 10, 2)->nullable(); // SGST amount, nullable
            $table->decimal('igst_amount', 10, 2)->nullable(); // IGST amount, nullable
            $table->decimal('gst_amount', 10, 2)->nullable(); // Total GST amount, nullable
            $table->boolean('discount_type')->nullable(); // Discount type (boolean), nullable
            $table->decimal('discount_value', 10, 2)->nullable(); // Discount value, nullable
            $table->foreignId('promocode_id')->nullable()->constrained('promocodes')->onDelete('set null'); // Foreign key to promocodes table, nullable
            $table->decimal('price_after_discount', 10, 2)->nullable(); // Price after discount, nullable
            $table->timestamps(); // Created at and updated at timestamps
            $table->softDeletes(); // Soft delete support
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_combos');
    }
};
