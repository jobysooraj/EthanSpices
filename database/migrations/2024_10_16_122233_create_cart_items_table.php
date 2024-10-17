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
        Schema::create('cart_items', function (Blueprint $table) {
            $table->id(); // auto-incrementing ID
            $table->foreignId('cart_id')->constrained('carts')->onDelete('cascade'); // Foreign key to carts table
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade'); // Foreign key to products table
            $table->foreignId('combo_id')->nullable()->constrained('combos')->onDelete('cascade'); // Foreign key to combos table, nullable
            $table->foreignId('custom_combo_id')->nullable()->constrained('customize_combos')->onDelete('cascade'); // Foreign key to customize_combos table, nullable
            $table->integer('quantity'); // Quantity of the product
            $table->decimal('price', 10, 2); // Price of the product
            $table->decimal('discount_amount', 10, 2)->nullable(); // Discount amount applied, nullable
            $table->decimal('total_price', 10, 2); // Total price after discount
            $table->timestamps(); // Created at and updated at timestamps
            $table->softDeletes(); // Soft delete support
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart_items');
    }
};
