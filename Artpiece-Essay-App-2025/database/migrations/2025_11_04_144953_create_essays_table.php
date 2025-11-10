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
        Schema::create('essays', function (Blueprint $table) {
            $table->id();
            // Cascade delete to remove essays if the associated artpiece is deleted
            $table->foreignId('artpiece_id')->constrained()->onDelete('cascade');
            // Cascade - If the author (user) is deleted, their essays are also deleted
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('essay_title');
            $table->text('essay_text');
            $table->string('tags')->nullable(); // Stores tags a JSON array 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('essays');
    }
};

