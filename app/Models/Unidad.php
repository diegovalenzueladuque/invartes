<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'sede_id' ];

    public function oficinas(){

        return $this->hasMany(Oficina::class);
    }
    public function sede(){
        return $this->belongsTo(Sede::class);
    }

    public function funcionarios(){
        return $this->hasMany(Funcionario::class);
    }
}
