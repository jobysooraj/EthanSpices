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
        Schema::create('contactuses', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('set null'); // Foreign key to users, nullable
            $table->string('name'); // Name of the user
            $table->string('email'); // Email address
            $table->binary('phone'); // Binary field for phone number
            $table->text('message'); // Text field for message
            $table->boolean('status')->default(false); // Status (boolean) with a default value
            $table->timestamps(); // created_at and updated_at timestamps
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contactuses');
    }
};
