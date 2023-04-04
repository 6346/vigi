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
        Schema::create('genre_Motorcycle', function (Blueprint $table) {
            $table->foreignId('genre_id')->constrained();
            $table->foreignId('Motorcycle_id')->constrained();
            $table->unique('genre_id');
            $table->unique('Motorcycle_id');
            // $table->unique(["genre_id", "Motorcycle_id"], 'genre_id_Motorcycle_id_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('genre_Motorcycle');
    }
};
