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
            $table->string('name_pokemon');
            $table->foreignId('id_family')->constrained('families', 'id_family');
            $table->string('id_evolve_from')->nullable();
            $table->string('id_evolve_to')->nullable();
            //$table->foreign('id_evolve_from')->references('id_pokemon')->on('pokemons')->nullable();
            //$table->foreign('id_evolve_to')->references('id_pokemon')->on('pokemons')->nullable();
            $table->foreignId('id_tier');
            $table->foreignId('id_region')->constrained('regions', 'id_region');
            $table->string('path_img_pokemon')->nullable();
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
