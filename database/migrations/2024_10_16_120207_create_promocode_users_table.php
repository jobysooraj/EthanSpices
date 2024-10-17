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
        Schema::create('promocode_users', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('user_id'); 
            $table->unsignedBigInteger('promocode_id'); 
            $table->unsignedBigInteger('order_id')->nullable(); 
            $table->integer('usage_count'); 
            $table->timestamps();
            $table->softDeletes();
         
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('promocode_id')->references('id')->on('promocodes')->onDelete('cascade');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('set null'); // Nullable relationship
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promocode_users');
    }
};
