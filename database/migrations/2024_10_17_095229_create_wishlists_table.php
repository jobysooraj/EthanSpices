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
            $table->id(); // Primary key
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Foreign key referencing Users table
            $table->foreignId('product_id')->nullable()->constrained('products')->onDelete('set null'); // Foreign key referencing Products table
            $table->foreignId('combo_id')->nullable()->constrained('combos')->onDelete('set null'); // Foreign key referencing Combos table
            $table->foreignId('custom_combo_id')->nullable()->constrained('custom_combos')->onDelete('set null'); // Foreign key referencing Customize Combos table
            $table->foreignId('user_combo_id')->constrained('user_combos')->onDelete('cascade'); // Foreign key referencing User Combos table
            $table->integer('quantity')->nullable(); // Quantity
            $table->decimal('price', 10, 2)->nullable(); // Price
            $table->timestamps(); // Created at and Updated at timestamps
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
