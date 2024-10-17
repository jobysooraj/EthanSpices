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
        Schema::create('promocodes', function (Blueprint $table) {
            $table->id(); 
            $table->string('promocode')->unique(); 
            $table->string('description')->nullable(); 
            $table->boolean('discount_type'); 
            $table->decimal('discount_value', 10, 2); 
            $table->decimal('min_order_amount', 10, 2)->nullable(); 
            $table->decimal('max_discount', 10, 2)->nullable(); 
            $table->timestamp('start_date')->nullable(); 
            $table->timestamp('end_date')->nullable(); 
            $table->decimal('usage_limit')->nullable();
            $table->integer('usage_per_user_limit')->nullable(); 
            $table->boolean('status')->default(true);
            $table->timestamps(); 
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promocodes');
    }
};
