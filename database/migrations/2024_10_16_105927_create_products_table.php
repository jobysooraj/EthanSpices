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
        Schema::create('products', function (Blueprint $table) {
            $table->id(); 
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade'); // Make sure this exists
            $table->foreignId('subcategory_id')->constrained('sub_categories')->onDelete('cascade'); 
            $table->foreignId('supplier_id')->constrained('suppliers')->onDelete('cascade'); 
            $table->foreignId('gsttax_id')->constrained('gst_taxes')->onDelete('cascade'); 
            $table->string('slug')->unique();
            $table->string('name'); 
            $table->decimal('price', 10, 2); 
            $table->boolean('discount_type')->nullable(); 
            $table->decimal('discount_value', 10, 2)->nullable(); 
            $table->decimal('price_after_discount', 10, 2);
            $table->decimal('cgst_rate', 5, 2); 
            $table->decimal('sgst_rate', 5, 2);
            $table->decimal('price_with_gst', 10, 2);
            $table->decimal('igst_rate', 5, 2);
            $table->binary('image')->nullable(); 
            $table->string('short_description')->nullable();
            $table->text('description')->nullable(); 
            $table->string('batch_no')->nullable();
            $table->string('hsn_code')->nullable(); 
            $table->boolean('status');
            $table->timestamps();
            $table->softDeletes(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
