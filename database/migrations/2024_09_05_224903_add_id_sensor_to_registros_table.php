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
        Schema::table('registros', function (Blueprint $table) {
            
            $table->unsignedBigInteger('id_sensor'); // Clave foránea para el sensor
              // Crear la relación con la tabla 'dispositivos'
              $table->foreign('id_sensor')->references('id_sensor')->on('dispositivos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('registros', function (Blueprint $table) {
            // Eliminar la relación antes de eliminar la columna
            $table->dropForeign(['id_sensor']);
            $table->dropColumn('id_sensor');
        });
    }
};
