<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCelosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('celos', function (Blueprint $table) {
            $table->id();
            $table->integer('id_hembra');
            $table->date('fecha');
            $table->time('hora');
            $table->enum('tipo',['Natural', 'Ovsynch', 'Protocolo con dispositivo']);
            $table->integer('id_responsable');
            $table->text('comentarios');

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
        Schema::dropIfExists('celos');
    }
}
