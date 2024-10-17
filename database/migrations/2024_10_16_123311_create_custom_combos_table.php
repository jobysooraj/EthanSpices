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
        Schema::create('custom_combos', function (Blueprint $table) {
            $table->id(); // auto-incrementing ID
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Foreign key to users table
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade'); // Foreign key to products table
            $table->foreignId('gst_id')->constrained('gsttaxes')->onDelete('cascade'); // Foreign key to gsttaxes table
            $table->integer('quantity'); // Quantity of the product in the combo
            $table->decimal('price', 10, 2); // Price of the combo
            $table->boolean('discount_type')->nullable(); // Discount type (boolean)
            $table->decimal('discount_value', 10, 2)->nullable(); // Discount value, nullable
            $table->decimal('cgst_amount', 10, 2)->nullable(); // CGST amount, nullable
            $table->decimal('sgst_amount', 10, 2)->nullable(); // SGST amount, nullable
            $table->decimal('igst_amount', 10, 2)->nullable(); // IGST amount, nullable
            $table->decimal('gst_amount', 10, 2)->nullable(); // Total GST amount, nullable
            $table->integer('no_of_items')->nullable(); // Number of items in the combo, nullable
            $table->decimal('final_price', 10, 2); // Final price after applying discounts and taxes
            $table->timestamps(); // Created at and updated at timestamps
            $table->softDeletes(); // Soft 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('custom_combos');
    }
};
