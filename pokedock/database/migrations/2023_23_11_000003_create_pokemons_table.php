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
        Schema::create('pokemons', function (Blueprint $table) {
            $table->id('id_pokemon');
            $table->foreignId('id')->constrained('users', 'id');
            $table->foreignId('id_rarity')->constrained('rarities', 'id_rarity');
            $table->foreignId('id_type')->constrained('types', 'id_type');
            $table->foreignId('id_family')->constrained('families', 'id_family');
            $table->boolean('catched');
            $table->unsignedBigInteger('id_evolve_from')->nullable();
            $table->unsignedBigInteger('id_evolve_to')->nullable();
            $table->foreign('id_evolve_from')->references('id_pokemon')->on('pokemons')->onDelete('set null');
            $table->foreign('id_evolve_to')->references('id_pokemon')->on('pokemons')->onDelete('set null');
            $table->foreignId('id_tier')->constrained('tiers', 'id_tier');
            $table->foreignId('id_region')->constrained('regions', 'id_region');
            $table->string('path_img_pokemon');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pokemons');
    }
};