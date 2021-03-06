<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animales extends Model
{
    use HasFactory;


    public function reproductor()
    {
        return $this->hasOne(Reproductores::class, 'id', 'id_padre');
    }

    public function madre()
    {
        return $this->hasOne(Animales::class, 'id', 'id_madre');
    }
}
