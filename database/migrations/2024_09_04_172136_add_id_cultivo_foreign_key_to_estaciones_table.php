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
        Schema::table('estaciones', function (Blueprint $table) {
            //
            $table->foreign('id_cultivo')->references('id_cultivo')->on('cultivos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('estaciones', function (Blueprint $table) {
            //
            // Eliminar la clave foránea
            $table->dropForeign(['id_cultivo']);
        });
    }
};
