<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oficina extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'unidad_id', 'sede_id'];

    public function unidad(){
        return $this->belongsTo(Unidad::class,);
    }

    public function sede(){
        return $this->belongsTo(Sede::class);
    }
}
