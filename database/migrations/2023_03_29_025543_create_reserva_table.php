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
            $table->date('fecha_ingreso');
            $table->string('estado');
=======
>>>>>>> 99a662170e91be1aab4488f5e5a750d6b9263440
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
=======
            $table->foreignId('id_vehiculo')
                  ->constrained('vehiculo')
                  ->cascadeOnUpdate()
                  ->cascadeOnDelete();
            $table->foreignId('id_sitio')
                  ->constrained('sitio')
                  ->cascadeOnUpdate()
                  ->cascadeOnDelete();
            $table->date('fecha_entrada');
>>>>>>> 99a662170e91be1aab4488f5e5a750d6b9263440
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
