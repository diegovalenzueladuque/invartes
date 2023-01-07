<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'oficina_id', 'sede_id' ];

    public function oficina(){

        return $this->belongsTo(Oficina::class);
    }
    public function sede(){
        return $this->belongsTo(Sede::class);
    }

    public function funcionarios(){
        return $this->hasMany(Funcionario::class);
    }
}
