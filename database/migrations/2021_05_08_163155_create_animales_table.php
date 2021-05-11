<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animales', function (Blueprint $table) {
            $table->id();
            $table->integer('numero')->unique();
            $table->enum('especie', ['Bovino', 'Caprino', 'Equino']);
            $table->string('nombre');
            $table->enum('sexo', ['F', 'M']);
            $table->integer('id_padre')->nullable();
            $table->integer('id_madre')->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->decimal('peso_nacimiento')->nullable();
            // $table->date('fecha_destete')->nullable();
            // $table->decimal('peso_destete',5,2)->nullable();
            $table->date('fecha_compra')->nullable();
            $table->date('fecha_salida')->nullable();
            $table->enum('tipo_salida',['Descarte', 'Matadero','Muerte','Enfermedad'])->nullable();
            $table->text('comentario_salida')->nullable();
            $table->enum('raza', ['Pardo Aleman', 'F1 Pardo x Guzerat']);
            $table->enum('hato', ['Lechero', 'Carne','Doble proposito']);
            $table->enum('marca', ['XZ4', 'M8N']);
            $table->enum('capa', ['Parda', 'Blanca','Griz','Blanco', 'Rojo', 'Negro', 'Josco', 'Pintas']);
            $table->enum('tipo_animal', ['Lechero Alta producción', 'Carnico', 'Doble proposito']);
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
        Schema::dropIfExists('animales');
    }
}
