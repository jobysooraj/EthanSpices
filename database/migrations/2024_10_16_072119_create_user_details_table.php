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
            $table->id(); 
            $table->unsignedBigInteger('user_id')->nullable()->unique(); 
            $table->string('permanent_address'); 
            $table->string('current_address')->nullable(); 
            $table->integer('pincode'); 
            $table->integer('lattitude');
            $table->integer('longitude'); 
            $table->string('landmark')->nullable(); 
            $table->boolean('status')->default(true); 
            $table->timestamps(); 
            $table->softDeletes(); 
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
