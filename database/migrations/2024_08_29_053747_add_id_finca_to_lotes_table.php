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
        Schema::table('lotes', function (Blueprint $table) {
            //
             // Añadir la columna id_finca
             $table->unsignedBigInteger('id_finca')->after('dimension');

             // Definir la clave foránea
            $table->foreign('id_finca')
            ->references('id_finca')
            ->on('fincas')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('lotes', function (Blueprint $table) {
             // Eliminar la clave foránea
             $table->dropForeign(['id_finca']);
            
             // Eliminar la columna id_finca
             $table->dropColumn('id_finca');
        });
    }
};
