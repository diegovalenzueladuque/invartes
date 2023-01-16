<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computador extends Model
{
    use HasFactory;
    protected $fillable = ['codigo', 'serie', 'marca_id', 'detalle_id', 'funcionario_id', 'telefono_id'];

    public function marca(){
        return $this->belongsTo(Marca::class);
    }

    public function detalle(){
        return $this->belongsTo(Detalle::class);
    }

    public function funcionario(){
        return $this->belongsTo(Funcionario::class);
    }
    public function telefono(){
        return $this->belongsTo(Telefono::class);
    }
}
