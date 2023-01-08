<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Impresora extends Model
{
    use HasFactory;
    protected $fillable = ['modelo', 'serie', 'marca_id', 'Conexion'];

    public function Marca(){
        return $this->belongsTo(Marca::class, 'id');
    }
    public function detalles(){
        return $this->hasMany(Detalle::class);
    }
    
}
