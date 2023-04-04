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
        Schema::table('language_Motorcycle', function (Blueprint $table)
        {
            $table->index('Motorcycle_id');
            $table->index('language_id');
            $table->dropUnique('language_Motorcycle_Motorcycle_id_unique');
            $table->dropUnique('language_Motorcycle_language_id_unique');
            $table->unique(['Motorcycle_id', 'language_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('language_Motorcycle', function (Blueprint $table) {
            $table->unique('Motorcycle_id');
            $table->unique('language_id');
            $table->dropUnique(['Motorcycle_id', 'language_id']);
            $table->dropIndex('language_Motorcycle_Motorcycle_id_index');
            $table->dropIndex('language_Motorcycle_language_id_index');
        });
    }
};
