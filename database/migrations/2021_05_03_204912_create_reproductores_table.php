<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReproductoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reproductores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('padre');
            $table->string('madre');
            $table->string('padre_padre');
            $table->string('padre_madre');
            $table->string('madre_padre');
            $table->string('madre_madre');
            $table->enum('raza', ['Angus', 'Chianina', 'Holstein']);
            $table->enum('tipo', ['Toro', 'Semen']);
            $table->integer('cantidad');
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
        Schema::dropIfExists('reproductores');
    }
}
