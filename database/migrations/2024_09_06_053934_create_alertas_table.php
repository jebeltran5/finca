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
        Schema::create('alertas', function (Blueprint $table) {
            $table->bigIncrements('id_alerta'); // Clave primaria auto-incremental
            $table->timestamp('fecha_hora'); // Fecha y hora de la alerta
            $table->char('tipo_alerta', 3); // Tipo de alerta
            $table->char('valor_registrado', 2); // Valor registrado
            $table->string('descripcion', 150); // Descripción de la alerta
            $table->unsignedBigInteger('id_registro'); // Clave foránea a la tabla registros
            $table->timestamps(); // Fechas de creación y actualización automáticas

            // Definición de la clave foránea
            $table->foreign('id_registro')
                  ->references('id_registro')->on('registros')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alertas');
    }
};
