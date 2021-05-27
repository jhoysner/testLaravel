<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePalpadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('palpado', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->enum('metodo', ['Palpado rectal', 'Ultrasonido', 'Observacion']);
            $table->integer('id_responsable');
            $table->integer('id_hembra');
            $table->enum('estado',['Prenada', 'Ciclando','Estatica','Aborto']);
            $table->text('diagnostico');
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
        Schema::dropIfExists('palpado');
    }
}
