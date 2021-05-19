<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;


    public function reproductor()
    {
        return $this->hasOne(Reproductores::class, 'id', 'id_reproductor');
    }

    public function animal()
    {
        return $this->hasOne(Animales::class, 'id', 'id_animal');
    }
}
