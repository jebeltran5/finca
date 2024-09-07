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
        Schema::create('producciones', function (Blueprint $table) {
            $table->id('id_produccion');
            $table->date('fecha_cosecha');
            $table->decimal('cantidad', 8,2);
            $table->unsignedBigInteger('id_cultivo');
            $table->enum('estado', ['brocado', 'buen estado']);
            $table->foreignId('id_cultivo')->constrained('cultivos')->onDelete('cascade'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producciones');
    }
};
