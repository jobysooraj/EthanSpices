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
            $table->id(); // Primary key
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Foreign key referencing Users table
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade'); // Foreign key referencing Products table
            $table->foreignId('combo_id')->nullable()->constrained('custom_combos')->onDelete('set null'); // Foreign key referencing Customize Combos table
            $table->foreignId('custom_combo_id')->nullable()->constrained('custom_combos')->onDelete('set null'); // Foreign key referencing Customize Combos table
            $table->timestamp('testimonial'); // Testimonial timestamp
            $table->decimal('rating', 2, 1); // Rating (e.g., 4.5)
            $table->boolean('status')->default(true); // Status
            $table->binary('testimonial_image')->nullable(); // Testimonial image (nullable)
            $table->timestamps(); // Created at and Updated at timestamps
            $table->softDeletes(); // Deleted at ti
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
