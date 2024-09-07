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
        Schema::create('fincas', function (Blueprint $table) {
            $table->id('id_finca');
            $table->string('nombre');
            $table->string('propietario');
            $table->decimal('latitud', 10, 8);  // Añadir columna latitud
            $table->decimal('longitud', 11, 8);
            $table->string('location');
            $table->foreignId('user_id')->constrained();// Relacion con el usuario que administra la finca
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fincas');
    }
};

