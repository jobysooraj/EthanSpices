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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('order_id')->nullable(); 
            $table->unsignedBigInteger('product_id')->nullable(); 
            $table->string('invoice_code')->unique(); 
            $table->timestamp('invoice_date'); 
            $table->decimal('total_amount', 10, 2); 
            $table->decimal('total_discount', 10, 2)->nullable(); 
            $table->decimal('promocode_discount', 10, 2)->nullable(); 
            $table->decimal('amount_after_discount', 10, 2)->nullable();
            $table->decimal('cgst_amount', 10, 2)->nullable();
            $table->decimal('sgst_amount', 10, 2)->nullable(); 
            $table->decimal('igst_amount', 10, 2)->nullable(); 
            $table->decimal('final_total', 10, 2); 
            $table->timestamps();
            $table->softDeletes(); 
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('set null');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
