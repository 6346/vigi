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
        Schema::create('country_Motorcycle', function (Blueprint $table) {
            $table->foreignId('country_id')->constrained();
            $table->foreignId('Motorcycle_id')->constrained();
            $table->unique('country_id');
            $table->unique('Motorcycle_id');
            // $table->unique(["country_id", "Motorcycle_id"], 'country_id_Motorcycle_id_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('country_Motorcycle');
    }
};
