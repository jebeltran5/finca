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
        Schema::table('producciones', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('id_cultivo');  // Agrega la columna id_cultivo
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('producciones', function (Blueprint $table) {
            //
            $table->dropColumn('id_cultivo');  // Elimina la columna id_cultivo
        });
    }
};
