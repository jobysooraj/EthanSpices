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
            $table->id(); // Auto-incrementing primary key
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('supplier_id');
            $table->unsignedBigInteger('gsttax_id');
            $table->string('slug')->unique();
            $table->string('name');
            $table->decimal('price', 10, 2);
            $table->binary('image')->nullable();
            $table->string('short_description')->nullable();
            $table->text('description')->nullable();
            $table->string('brand',100)->nullable();

            $table->string('batch_no')->nullable();
            $table->string('hsn_code')->nullable();
            $table->enum('status',['active','inactive'])->default('active');

            $table->timestamps();
            $table->softDeletes();

            // Foreign key constraints
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('supplier_id')->references('id')->on('suppliers')->onDelete('cascade');
            $table->foreign('gsttax_id')->references('id')->on('gsttaxes')->onDelete('cascade');
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
