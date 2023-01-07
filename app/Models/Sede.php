<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'direccion'];

    public function unidades(){
        return $this->hasMany(Unidad::class);
    }
    public function oficinas(){
        return $this->hasMany(Oficina::class);
    }
}
