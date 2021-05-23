<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Celo extends Model
{
    use HasFactory;


    public function hembra()
    {
        return $this->hasOne(Animales::class, 'id', 'id_hembra');
    }
}
