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
        Schema::create('catalogo_bancos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('clave'); // Columna para la clave
            $table->string('nombre_corto'); // Columna para el nombre corto
            $table->string('nombre_o_razon_social'); // Columna para el nombre o razón social
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catalogo_bancos');
    }
};
