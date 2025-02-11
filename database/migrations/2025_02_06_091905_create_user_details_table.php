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
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();  // Primary Key (auto-incrementing)
            $table->unsignedBigInteger('user_id')->nullable()->unique();  // Unique Foreign Key referencing users table
            $table->string('permanent_address');  // Permanent Address (Required)
            $table->string('current_address')->nullable();  // Current Address (Optional)
            $table->integer('pincode');  // Pincode
            $table->decimal('latitude', 10, 7);  // Latitude (Decimal to store precise coordinates)
            $table->decimal('longitude', 10, 7);  // Longitude (Decimal to store precise coordinates)
            $table->string('landmark')->nullable();  // Landmark (Optional)
            $table->timestamps();  // created_at, updated_at
            $table->softDeletes();  // deleted_at for soft deletes

            // Foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_details');
    }
};
