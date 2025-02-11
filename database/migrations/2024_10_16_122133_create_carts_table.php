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
        Schema::create('carts', function (Blueprint $table) {
            $table->id(); // auto-incrementing ID
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key to Users table
            $table->integer('total_items'); // Total number of items in the cart
            $table->decimal('total_quantity', 10, 2); // Total quantity of products
            $table->decimal('subtotal', 10, 2); // Subtotal amount
            $table->decimal('total_discount', 10, 2)->nullable(); // Total discount applied
            $table->foreignId('promocode_id')->nullable()->constrained('promocodes')->onDelete('set null'); // Foreign key to promocodes table
            $table->decimal('promocode_discount', 10, 2)->nullable(); // Promocode discount applied
            $table->decimal('gst_amount', 10, 2)->nullable(); // Total GST amount
            $table->decimal('cgst_amount', 10, 2)->nullable(); // CGST amount
            $table->decimal('sgst_amount', 10, 2)->nullable(); // SGST amount
            $table->decimal('igst_amount', 10, 2)->nullable(); // IGST amount
            $table->decimal('final_total', 10, 2); // Final total amount after calculations
            $table->timestamps(); // Created at and updated at timestamps
            $table->softDeletes(); // Soft delete support
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
