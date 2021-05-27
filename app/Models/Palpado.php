<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Palpado extends Model
{
    use HasFactory;

    protected $table = 'palpado';


    public function hembra()
    {
        return $this->hasOne(Animales::class, 'id', 'id_hembra');
    }

    public function responsable()
    {
        return $this->hasOne(User::class, 'id', 'id_responsable');
    }
}
