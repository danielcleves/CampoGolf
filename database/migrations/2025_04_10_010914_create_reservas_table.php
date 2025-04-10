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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id(); // id (PK)
        
            $table->foreignId('campo_id')->constrained('campos')->onDelete('cascade'); // FK a campos
            $table->foreignId('jugador_id')->constrained('jugadores')->onDelete('cascade'); // FK a jugadores
        
            $table->date('fecha_reserva'); 
            $table->time('hora_inicio'); 
            $table->integer('duracion'); 
            $table->integer('numero_jugadores');
        
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
