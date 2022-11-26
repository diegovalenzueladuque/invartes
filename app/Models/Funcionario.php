<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'ap_paterno', 'ap_materno', 'rol_id', 'unidad_id'];

    public function Rol(){
        return $this->hasMany(Rol::class, 'id');
    }

    public function Unidad(){

        return $this->hasMany(Unidad::class, 'id');
    }
}
