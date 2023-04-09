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
<<<<<<< HEAD
=======
            $table->date('fecha_solicitud');
            $table->time('hora_solicitud');
            $table->date('fecha_aprobacion');
            $table->time('hora_aprobacion');
            $table->string('estado');
>>>>>>> d5630e1bfc96579df5fe59f04985082bec4d7e23
            $table->foreignId('id_cliente')
                  ->constrained('cliente')
                  ->cascadeOnUpdate()
                  ->cascadeOnDelete();
<<<<<<< HEAD
            $table->foreignId('id_vehiculo')
                  ->constrained('vehiculo')
                  ->cascadeOnUpdate()
                  ->cascadeOnDelete();
            $table->foreignId('id_sitio')
                  ->constrained('sitio')
                  ->cascadeOnUpdate()
                  ->cascadeOnDelete();
            $table->date('fecha_entrada');
=======
>>>>>>> d5630e1bfc96579df5fe59f04985082bec4d7e23
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
