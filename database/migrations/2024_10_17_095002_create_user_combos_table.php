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
        Schema::create('user_combos', function (Blueprint $table) {
            $table->id(); 
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Adjust if the table name is different
            $table->foreignId('combo_id')->constrained('combos')->onDelete('cascade');
            $table->foreignId('custom_combo_id')->constrained('custom_combos')->onDelete('cascade');
            $table->decimal('cgst_amount', 10, 2)->nullable();
            $table->decimal('sgst_amount', 10, 2)->nullable();
            $table->decimal('igst_amount', 10, 2)->nullable();
            $table->decimal('gst_amount', 10, 2)->nullable();
            $table->boolean('discount_type')->nullable();
            $table->decimal('discount_value', 10, 2)->nullable();
            $table->foreignId('promocode_id')->nullable()->constrained('promocodes')->onDelete('set null'); // Allow for null values
            $table->decimal('price_after_discount', 10, 2);
            $table->timestamps();
            $table->softDeletes(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_combos');
    }
};
