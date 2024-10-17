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
        Schema::create('cms', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('company_name'); // Company name
            $table->string('primary_email'); // Primary email address
            $table->string('secondary_email')->nullable(); // Secondary email address (nullable)
            $table->binary('primary_mobile'); // Binary field for primary mobile number
            $table->binary('secondary_mobile')->nullable(); // Binary field for secondary mobile number (nullable)
            $table->binary('logo')->nullable(); // Blob for company logo (nullable)
            $table->string('tag_line')->nullable(); // Tag line (nullable)
            $table->string('gst_no')->nullable(); // GST number (nullable)
            $table->string('fssai_no')->nullable(); // FSSAI number (nullable)
            $table->binary('gst_doc')->nullable(); // Blob for GST document (nullable)
            $table->binary('fssai_doc')->nullable(); // Blob for FSSAI document (nullable)
            $table->timestamps(); // created_at and updated_at timestamps
            $table->softDeletes(); // For soft deletes (deleted_at timestamp)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cms');
    }
};
