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
        // I have changed the 'year' column type from integer to string to better accommodate various year formats (such as "unkown", "c. 1500", "1999-2000", etc.)
        Schema::table('artpieces', function (Blueprint $table) {
            $table->string('year')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('artpieces', function (Blueprint $table) {
            $table->integer('year')->nullable()->change();
        });
    }
};
