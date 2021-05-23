<?php

namespace Database\Seeders;

use App\Models\Reproductores;
use Illuminate\Database\Seeder;

class ReproductoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reproductores::Create([
            'nombre' => 'N/A',
            'padre' => 'N/A',
            'madre' => 'N/A',
            'padre_padre' => 'N/A',
            'padre_madre' => 'N/A',
            'madre_padre' => 'N/A',
            'madre_madre' => 'N/A',
            'raza' => 'Pardo',
            'tipo' => 'Toro',
        ]);
        Reproductores::Create([
            'nombre' => 'Pelo',
            'padre' => 'N/A',
            'madre' => 'N/A',
            'padre_padre' => 'N/A',
            'padre_madre' => 'N/A',
            'madre_padre' => 'N/A',
            'madre_madre' => 'N/A',
            'raza' => 'Pardo',
            'tipo' => 'Semen',
        ]);
    }
}
