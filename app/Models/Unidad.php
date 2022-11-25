<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    protected $fillable = ['nombre', 'oficina_id', 'sede_id' ];

    public function oficinas(){

        return $this->hasMany(Oficina::class);
    }
    public function sedes(){
        return $this->hasMany(Sede::class);
    }
}
