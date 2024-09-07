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
        Schema::create('dispositivos', function (Blueprint $table) {
            $table->id('id_sensor');
            $table->char('tipo_sensor', 2);
            $table->char('estado', 2);
            $table->date('fecha'); // Fecha en formato DATE
            $table->time('hora'); // Hora en formato TIME
            $table->unsignedBigInteger('id_estacion');
            $table->timestamps();
             $table->foreign('id_estacion')
                   ->references('id_estacion')
                   ->on('estaciones')
                   ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dispositivos');
    }
};
