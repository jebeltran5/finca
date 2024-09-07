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
        Schema::create('registros', function (Blueprint $table) {
            $table->id('id_registro'); // Columna ID auto-incrementable
            $table->decimal('temperatura', 5, 2); // Temperatura con 5 dígitos en total y 2 decimales
            $table->decimal('humedad', 3, 1); // Humedad con 3 dígitos en total y 1 decimal
            $table->date('fecha'); // Fecha
            $table->timestamp('hora'); // Hora
            $table->unsignedBigInteger('id_sensor'); // Clave foránea para el sensor
            $table->timestamps(); // Timestamps para created_at y updated_at

            // Definición de la clave foránea
            $table->foreign('id_sensor')->references('id_sensor')->on('dispositivos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registros');
    }
};
