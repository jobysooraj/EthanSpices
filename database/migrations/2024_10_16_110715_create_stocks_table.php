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
        Schema::create('stocks', function (Blueprint $table) {
            $table->id(); 
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->foreignId('subcategory_id')->constrained('sub_categories')->onDelete('cascade'); // Ensure table name matches
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->decimal('total_quantity', 10, 2); 
            $table->decimal('used_quantity', 10, 2); 
            $table->decimal('balanced_quantity', 10, 2); 
            $table->timestamps(); 
            $table->softDeletes(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stocks');
    }
};
