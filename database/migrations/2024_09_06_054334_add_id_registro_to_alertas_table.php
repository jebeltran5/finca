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
        Schema::table('alertas', function (Blueprint $table) {
            //
            // Agregar la columna id_registro
            $table->unsignedBigInteger('id_registro')->after('descripcion'); // O la posición deseada

            // Definir la clave foránea
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
        Schema::table('alertas', function (Blueprint $table) {
            //
            // Eliminar la clave foránea
            $table->dropForeign(['id_registro']);
            
            // Eliminar la columna id_registro
            $table->dropColumn('id_registro');
        });
    }
};
