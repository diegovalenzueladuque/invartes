<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Impresora extends Model
{
    use HasFactory;
    protected $fillable = ['modelo', 'marca_id', 'Conexion'];

    public function Marca(){
        return $this->hasMany(Marca::class, 'id');
    }
}
