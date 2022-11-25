<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computador extends Model
{
    protected $fillable = ['codigo', 'marca_id', 'detalle_id', 'funcionario_id', 'telefono_id'];

    public function Marca(){
        return $this->hasMany(Marca::class);
    }

    public function Detalle(){
        return $this->hasMany(Detalle::class);
    }

    public function Funcionario(){
        return $this->hasMany(Funcionario::class);
    }
    public function Telefono(){
        return $this->hasMany(Telefono::class);
    }
}
