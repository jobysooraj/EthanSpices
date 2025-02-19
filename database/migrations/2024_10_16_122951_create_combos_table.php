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
            $table->foreignId('gsttax_id')->constrained('gst_taxes')->onDelete('cascade');
            $table->decimal('product_price', 10, 2); // Product price (10 digits total, 2 after decimal)
            $table->decimal('combo_price', 10, 2); // Combo price (10 digits total, 2 after decimal)
            $table->text('description')->nullable(); // Description (nullable)
            $table->boolean('status')->default(true); // Status (boolean) with a default value
            $table->string('image')->nullable(); // Blob for combo image (nullable)
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
