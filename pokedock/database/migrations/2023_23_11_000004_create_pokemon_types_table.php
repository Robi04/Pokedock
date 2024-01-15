<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pokemon_types', function (Blueprint $table) {
            $table->foreignId('id_pokemon')->constrained('pokemons', 'id_pokemon');
            $table->foreignId('id_type')->constrained('types', 'id_type');
            $table->primary(['id_pokemon', 'id_type']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('pokemon_types');
    }
};
