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
        DB::table('artpieces')->where('title', 'Mona Lisa')
            ->update(['img_url' => 'Mona_Lisa_by_Leonardo.jpg']);

        DB::table('artpieces')->where('title', 'The Starry Night')
            ->update(['img_url' => 'The_Starry_Night.jpg']);

        DB::table('artpieces')->where('title', 'The Persistence of Memory')
            ->update(['img_url' => 'The_Persistence_of_Memory.jpg']);

        DB::table('artpieces')->where('title', 'David')
            ->update(['img_url' => 'david_michelangelo.jpg']);

        DB::table('artpieces')->where('title', 'Girl with a Pearl Earring')
            ->update(['img_url' => 'Girl_with_a_Pearl_Earring.jpg']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('artpieces', function (Blueprint $table) {
            //
        });
    }
};
