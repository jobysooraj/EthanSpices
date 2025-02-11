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
        Schema::create('combos', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade'); // Foreign key to products
            $table->decimal('product_price', 10, 2); // Product price (10 digits total, 2 after decimal)
            $table->decimal('combo_price', 10, 2); // Combo price (10 digits total, 2 after decimal)
            $table->decimal('cgst_amount', 10, 2)->nullable(); // CGST amount (nullable)
            $table->decimal('sgst_amount', 10, 2)->nullable(); // SGST amount (nullable)
            $table->decimal('igst_amount', 10, 2)->nullable(); // IGST amount (nullable)
            $table->decimal('total_gst_amount', 10, 2)->nullable(); // Total GST amount (nullable)
            $table->decimal('final_price', 10, 2); // Final price (10 digits total, 2 after decimal)
            $table->text('description')->nullable(); // Description (nullable)
            $table->boolean('status')->default(true); // Status (boolean) with a default value
            $table->binary('image')->nullable(); // Blob for combo image (nullable)
            $table->timestamps(); // created_at and updated_at timestamps
            $table->softDeletes(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('combos');
    }
};
