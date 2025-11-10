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
        Schema::create('artpieces', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('img_url');
            $table->string('type');
            $table->string('year')->nullable();
            $table->timestamps(); // creates 'created_at' and 'updated_at' as timestamp
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artpieces');
    }
};
