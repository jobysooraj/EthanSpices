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
            $table->id(); 
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Adjust if the table name is different
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->foreignId('gst_id')->constrained('gst_taxes')->onDelete('cascade');
            $table->integer('quantity');
            $table->decimal('price', 10, 2);
            $table->boolean('discount_type')->nullable();
            $table->decimal('discount_value', 10, 2)->nullable();
            $table->decimal('cgst_amount', 10, 2)->nullable();
            $table->decimal('sgst_amount', 10, 2)->nullable();
            $table->decimal('igst_amount', 10, 2)->nullable();
            $table->decimal('gst_amount', 10, 2)->nullable();
            $table->integer('no_of_items')->nullable();
            $table->decimal('final_price', 10, 2);
            $table->timestamps();
            $table->softDeletes(); 
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
