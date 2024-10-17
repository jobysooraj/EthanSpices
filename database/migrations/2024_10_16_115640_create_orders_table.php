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
        Schema::create('orders', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('user_id'); 
            $table->unsignedBigInteger('product_id'); 
            $table->timestamp('order_date')->useCurrent();
            $table->decimal('quantity', 10, 2); 
            $table->integer('no_of_items'); 
            $table->decimal('total_price', 10, 2); 
            $table->decimal('total_discount', 10, 2)->nullable(); 
            $table->unsignedBigInteger('promocode_id')->nullable(); 
            $table->decimal('promocode_discount', 10, 2)->nullable();
            $table->decimal('amount_after_discount', 10, 2)->nullable(); 
            $table->decimal('total_gst', 10, 2); 
            $table->decimal('sgst_amount', 10, 2); 
            $table->decimal('igst_amount', 10, 2); 
            $table->decimal('final_total', 10, 2); 
            $table->decimal('cgst_amount', 10, 2); 
            $table->integer('status'); 
            $table->string('shipping_address'); 
            $table->timestamps(); 
            $table->softDeletes(); 
            
            // Foreign key constraints
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('promocode_id')->references('id')->on('promocodes')->onDelete('set null');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
