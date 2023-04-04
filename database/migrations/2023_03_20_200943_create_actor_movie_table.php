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
        Schema::create('actor_Motorcycle', function (Blueprint $table) {
            $table->foreignId('actor_id')->constrained();
            $table->foreignId('Motorcycle_id')->constrained();
            $table->unique(["actor_id", "Motorcycle_id"], 'actor_id_Motorcycle_id_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actor_Motorcycle');
    }
};
