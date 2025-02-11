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
        Schema::create('combos', function (Blueprint $table) {
            $table->id();  // Primary Key (auto-incrementing)
            $table->unsignedBigInteger('product_id');  // Foreign Key referencing the products table
            $table->unsignedBigInteger('gsttax_id');

            $table->decimal('product_price', 10, 2);  // Price of the product
            $table->decimal('combo_price', 10, 2);  // Combo price
           
            $table->decimal('final_price', 10, 2);  // Final price after GST
            $table->string('description');  // Combo description
            $table->boolean('status')->default(true);  // Status of the combo (active/inactive)
            $table->binary('image')->nullable();  // Image for the combo (stored as binary data)
            $table->timestamps();  // created_at, updated_at
            $table->softDeletes();  // deleted_at for soft deletes

            // Adding a foreign key constraint for product_id referencing products table
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('gsttax_id')->references('id')->on('gsttaxes')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('combos');
    }
};
