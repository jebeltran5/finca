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
        Schema::table('fincas', function (Blueprint $table) {
             // Añadir la columna user_id
             $table->foreignId('user_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('fincas', function (Blueprint $table) {
             // Eliminar la clave foránea
             $table->dropForeign(['user_id']);
            
             // Eliminar la columna user_id
             $table->dropColumn('user_id');
        });
    }
};
