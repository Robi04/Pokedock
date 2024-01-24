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
        Schema::create('pokedex', function (Blueprint $table) {
            $table->foreignId('id_pokemon')->constrained('pokemons', 'id_pokemon');
            $table->foreignId('id_user');
            $table->integer('nb_candy_family')->nullable();
            $table->primary(['id_pokemon', 'id_user']);
            $table->boolean('catched');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pokedex');
    }
};
