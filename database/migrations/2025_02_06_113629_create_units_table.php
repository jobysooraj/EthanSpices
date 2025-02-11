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
        Schema::create('units', function (Blueprint $table) {
            $table->id();  // Primary Key (auto-increment)
            $table->string('title', 100);  // Unit title (e.g., Kilogram, Liter, Piece)
            $table->text('description')->nullable();  // Optional description
            $table->enum('status', ['active', 'blocked'])->default('active');  // Status with default 'active'
            $table->timestamps();  // created_at, updated_at
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('units');
    }
};
