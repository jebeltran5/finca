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
        Schema::create('estaciones', function (Blueprint $table) {
            $table->id('id_estacion');
            $table->string('nombre_estacion');
            $table->decimal('latitud', 10, 7);
            $table->decimal('longitud', 10, 7);
            $table->date('fecha_instalacion');
            $table->unsignedBigInteger('id_cultivo');  // Clave foránea
            $table->timestamps();

            // Definir la relación de clave foránea
            $table->foreign('id_cultivo')->references('id_cultivo')->on('cultivos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estaciones');
    }
};

