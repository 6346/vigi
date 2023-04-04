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
        Schema::table('genre_Motorcycle', function (Blueprint $table)
        {
            $table->index('Motorcycle_id');
            $table->index('genre_id');
            $table->dropUnique('genre_Motorcycle_Motorcycle_id_unique');
            $table->dropUnique('genre_Motorcycle_genre_id_unique');
            $table->unique(['Motorcycle_id', 'genre_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('genre_Motorcycle', function (Blueprint $table) {
            $table->unique('Motorcycle_id');
            $table->unique('genre_id');
            $table->dropUnique(['Motorcycle_id', 'genre_id']);
            $table->dropIndex('genre_Motorcycle_Motorcycle_id_index');
            $table->dropIndex('genre_Motorcycle_genre_id_index');
        });
    }
};
