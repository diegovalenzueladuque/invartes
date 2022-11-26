<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computador extends Model
{
    use HasFactory;
    protected $fillable = ['codigo', 'marca_id', 'detalle_id', 'funcionario_id', 'telefono_id'];

    public function Marca(){
        return $this->hasMany(Marca::class, 'id');
    }

    public function Detalle(){
        return $this->hasMany(Detalle::class, 'id');
    }

    public function Funcionario(){
        return $this->hasMany(Funcionario::class, 'id');
    }
    public function Telefono(){
        return $this->hasMany(Telefono::class, 'id');
    }
}
