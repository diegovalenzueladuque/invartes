<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'ap_paterno', 'ap_materno', 'rol_id', 'unidad_id'];

    public function Rol(){
        return $this->belongsTo(Rol::class);
    }

    public function Unidad(){

        return $this->belongsTo(Unidad::class);
    }
    public function computadores(){
        return $this->hasMany(Computador::class);
    }
}
