<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserva', function (Blueprint $table) {
            $table->id();
            $table->string('fecha_hora_solicitud');
            $table->string('fecha_hora_aprobacion');
            $table->string('estado');
            $table->foreignId('id_cliente')
                  ->constrained('cliente')
                  ->cascadeOnUpdate()
                  ->cascadeOnDelete();
            $table->foreignId('id_vehiculo')
                  ->constrained('vehiculo')
                  ->cascadeOnUpdate()
                  ->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reserva');
    }
}
