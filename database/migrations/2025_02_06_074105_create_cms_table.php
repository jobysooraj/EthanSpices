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
            $table->id();  // Primary Key (auto-incrementing)
            $table->string('company_name');  // Company name
            $table->string('primary_email');  // Primary email
            $table->string('secondary_email')->nullable();  // Secondary email (nullable)
            $table->binary('primary_mobile')->nullable();  // Primary mobile number stored as binary (nullable)
            $table->binary('secondary_mobile')->nullable();  // Secondary mobile number stored as binary (nullable)
            $table->binary('logo')->nullable();  // Logo stored as binary (nullable)
            $table->string('tag_line')->nullable();  // Tagline (nullable)
            $table->string('gst_no')->nullable();  // GST Number (nullable)
            $table->string('fssai_no')->nullable();  // FSSAI Number (nullable)
            $table->binary('gst_doc')->nullable();  // GST document stored as binary (nullable)
            $table->binary('fssai_doc')->nullable();  // FSSAI document stored as binary (nullable)
            $table->timestamps();  // created_at, updated_at
            $table->softDeletes();  
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
