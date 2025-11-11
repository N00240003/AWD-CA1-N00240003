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
        Schema::create('artists', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nationality')->nullable();
            $table->date('birth_date')->nullable();
            $table->date('death_date')->nullable(); 
            $table->text('bio')->nullable(); // Short biography
            $table->text('movement')->nullable(); // Art movement associated with the artist
            $table->string('portrait_url')->nullable(); // URL to artist's portrait image (in images/artists/)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artists');
    }
};
