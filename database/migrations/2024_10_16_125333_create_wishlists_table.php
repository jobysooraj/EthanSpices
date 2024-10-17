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
        Schema::create('wishlists', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Foreign key to users table
            $table->foreignId('product_id')->nullable()->constrained('products')->onDelete('set null'); // Foreign key to products table, nullable
            $table->foreignId('combo_id')->nullable()->constrained('combos')->onDelete('set null'); // Foreign key to combos table, nullable
            $table->foreignId('customize_combo_id')->nullable()->constrained('customize_combos')->onDelete('set null'); // Foreign key to customize_combos table, nullable
            $table->foreignId('user_combo_id')->constrained('user_combos')->onDelete('cascade'); // Foreign key to user_combos table
            $table->integer('quantity')->nullable(); // Quantity, nullable
            $table->decimal('price', 10, 2)->nullable(); // Price, nullable
            $table->timestamps(); // Created at and updated at timestamps
            $table->softDeletes(); // Soft delete support
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wishlists');
    }
};
