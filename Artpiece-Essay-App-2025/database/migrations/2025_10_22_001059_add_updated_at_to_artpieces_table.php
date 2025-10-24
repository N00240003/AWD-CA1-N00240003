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
         Schema::table('artpieces', function (Blueprint $table) {
        $table->unsignedInteger('updated_at')->after('created_at'); // or use timestamp
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::table('artpieces', function (Blueprint $table) {
        $table->dropColumn('updated_at');
    });
    }
};
