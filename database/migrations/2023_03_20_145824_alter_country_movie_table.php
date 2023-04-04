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
        Schema::table('country_Motorcycle', function (Blueprint $table)
        {
            $table->index('Motorcycle_id');
            $table->index('country_id');
            $table->dropUnique('country_Motorcycle_Motorcycle_id_unique');
            $table->dropUnique('country_Motorcycle_country_id_unique');
            $table->unique(['Motorcycle_id', 'country_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('country_Motorcycle', function (Blueprint $table) {
            $table->unique('Motorcycle_id');
            $table->unique('country_id');
            $table->dropUnique(['Motorcycle_id', 'country_id']);
            $table->dropIndex('country_Motorcycle_Motorcycle_id_index');
            $table->dropIndex('country_Motorcycle_country_id_index');
        });
    }
};
