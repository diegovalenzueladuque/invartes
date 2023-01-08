<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;

    public function Impresoras(){
        return $this->hasMany(Impresora::class);
    }

    public function Telefonos(){
        return $this->hasMany(Telefono::class);
    }

    public function Computadores(){
        return $this->hasMany(Computador::class);
    }

    
}
