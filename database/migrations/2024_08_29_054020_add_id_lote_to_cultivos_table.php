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
        Schema::table('cultivos', function (Blueprint $table) {
            // Añadir la columna id_lote
            $table->unsignedBigInteger('id_lote')->after('estado');
            
            // Definir la clave foránea
            $table->foreign('id_lote')
                  ->references('id_lote')
                  ->on('lotes')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cultivos', function (Blueprint $table) {
            // Eliminar la clave foránea
            $table->dropForeign(['id_lote']);
            
            // Eliminar la columna id_lote
            $table->dropColumn('id_lote');
        });
    }
};
