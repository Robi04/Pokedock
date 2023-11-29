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
        Schema::create('summon_packs', function (Blueprint $table) {
            $table->id('id_summonpack');
            $table->float('price_summonpack');
            $table->integer('proba_bad_summon');
            $table->integer('proba_mid_summon');
            $table->integer('proba_legendary_summon');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('summon_packs');
    }
};