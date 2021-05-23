<?php

namespace Database\Seeders;

use App\Models\Animales;
use Illuminate\Database\Seeder;

class AnimalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Animales::Create([
            'numero' => 1,
            'especie' => 'Bovino',
            'nombre' => 'N/A',
            'sexo' => 'F',
            'raza' => 'Pardo Aleman',
            'hato' => 'Lechero',
            'marca' => 'M8N',
            'capa' => 'Parda',
            'tipo_animal' => 'Carnico',
        ]);
        Animales::Create([
            'numero' => 2,
            'especie' => 'Bovino',
            'nombre' => 'Pelusa',
            'sexo' => 'F',
            'raza' => 'Pardo Aleman',
            'hato' => 'Lechero',
            'marca' => 'M8N',
            'capa' => 'Parda',
            'tipo_animal' => 'Carnico',
        ]);
    }
}
