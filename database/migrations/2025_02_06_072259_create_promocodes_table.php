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
            $table->id(); // Auto-incrementing primary key
            $table->string('promocode')->unique();
            $table->string('description')->nullable();
            $table->boolean('discount_type');
            $table->decimal('discount_value', 10, 2);
            $table->decimal('min_order_amount', 10, 2);
            $table->decimal('max_discount', 10, 2);
            $table->timestamp('start_date');
            $table->timestamp('end_date');
            $table->decimal('usage_limit', 10, 2);
            $table->integer('usage_per_user_limit');
            $table->enum('status',['active','inactive'])->default('active');
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
