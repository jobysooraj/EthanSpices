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
           $table->string('first_name')->after('name');
           $table->string('last_name')->after('first_name')->nullable();
           $table->date('dob')->after('last_name')->nullable();
           $table->date('mobile')->after('email')->nullable();
           $table->string('role')->after('email')->nullable();
           $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
           $table->dropColumn('first_name');
           $table->dropColumn('last_name');
           $table->dropColumn('dob');
           $table->dropColumn('mobile');
           $table->dropColumn('role');
           $table->dropSoftDeletes();
        });
    }
};
