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
        Schema::create('contactus', function (Blueprint $table) {
            $table->id();  // Primary Key (auto-incrementing)
            $table->unsignedBigInteger('user_id')->nullable();  // Foreign Key referencing users table, nullable
            $table->string('name');  // Name of the user
            $table->string('email');  // Email address of the user
            $table->binary('phone')->nullable();  // Phone number, stored as binary
            $table->text('message');  // Message content
            $table->boolean('status')->default(true);  // Status (active/inactive)
            $table->timestamps();  // created_at, updated_at
            $table->softDeletes();  // deleted_at for soft deletes

            // Adding a foreign key constraint for user_id referencing users table (if exists)
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contactus');
    }
};
