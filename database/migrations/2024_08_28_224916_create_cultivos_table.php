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
        Schema::create('cultivos', function (Blueprint $table) {
            $table->id('id_cultivo');
            $table->string('tipo_cultivo');
            $table->date('fecha_siembra');
            $table->enum('estado',['produccion', 'recien sembrado', 'soqueado', 'brocado', 'normal']);
            $table->unsignedBigInteger('id_lote');
            $table->timestamps();

           // $table->foreign('id_lote')->references('id_lote')->on('lotes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cultivos');
    }
};
