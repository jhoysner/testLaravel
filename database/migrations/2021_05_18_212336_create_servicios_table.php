<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->id();
            $table->integer('id_animal')->nullable();
            $table->dateTime('hora_inseminacion')->nullable();
            $table->enum('tipo_reproduccion', ['Inseminacion', 'Monta Natural','Embrion'])->nullable();            
            $table->integer('id_reproductor')->nullable();
            $table->enum('inseminador',['Hans', 'Walter Colono'])->nullable();
            $table->date('fecha_confirmacion')->nullable();
            $table->boolean('prenada')->nullable();
            $table->text('comentario')->nullable();
            $table->integer('id_responsable')->nullable();
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
        Schema::dropIfExists('servicios');
    }
}
