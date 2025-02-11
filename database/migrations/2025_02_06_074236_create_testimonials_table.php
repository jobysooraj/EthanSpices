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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();  // Primary Key (auto-incrementing)
            $table->unsignedBigInteger('user_id');  // Foreign Key referencing the users table
            $table->unsignedBigInteger('product_id')->nullable();  // Foreign Key referencing the products table
            $table->unsignedBigInteger('combo_id')->nullable();  // Foreign Key referencing the customize_combos table
            $table->text('testimonial');  // Timestamp for when the testimonial was given
            $table->decimal('rating', 3, 2)->nullable();  // Rating given, e.g., 4.5 (maximum 5)
            $table->boolean('status')->default(true);  // Status (active/inactive)
            $table->binary('testimonial_image')->nullable();  // Testimonial image stored as binary (nullable)
            $table->timestamps();  // created_at, updated_at
            $table->softDeletes();  // deleted_at for soft deletes

            // Adding foreign key constraints
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('combo_id')->references('id')->on('combos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
