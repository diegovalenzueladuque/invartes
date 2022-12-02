<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;

    public function Impresora(){
        return $this->belongsTo(Impresora::class, 'id');
    }

    public function Telefono(){
        return $this->belongsTo(Telefono::class, 'id');
    }

    public function Computador(){
        return $this->belongsTo(Computador::class, 'id');
    }

    
}
