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
        Schema::create('categories', function (Blueprint $table) {
            $table->id(); 
            $table->string('slug')->unique(); 
            $table->string('name'); 
            $table->binary('image')->nullable(); 
            $table->boolean('status')->default(true); 
            $table->string('short_description')->nullable();
            $table->text('description')->nullable(); 
            $table->timestamps(); 
            $table->softDeletes(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['category_id']); // Replace with your actual foreign key name
        });
        Schema::table('stocks', function (Blueprint $table) {
            $table->dropForeign(['category_id']); // Replace with your actual foreign key name
        });
        Schema::dropIfExists('categories');
    }
};
