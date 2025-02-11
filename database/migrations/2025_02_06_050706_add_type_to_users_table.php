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
        Schema::table('users', function (Blueprint $table) {
            $table->date('date_of_birth')->after('email')->nullable();
            $table->string('role')->after('date_of_birth')->default('User'); // Users: 0=>User, 1=>Admin, 2=>Manager 
            $table->string('phone')->after('role')->nullable();
            $table->string('status')->after('phone')->default('active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('date_of_birth');
            $table->dropColumn('role');
            $table->dropColumn('phone');
            $table->dropColumn('status');
        });
    }
};
