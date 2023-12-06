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
        Schema::create('shoppacks', function (Blueprint $table) {
            $table->id('id_shoppack');
            $table->string('name_shoppack');
            $table->float('price_shoppack');
            $table->integer('nb_credit_shoppack');
            $table->string('path_img_shoppack')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shoppacks');
    }
};
