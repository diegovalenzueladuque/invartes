<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
    protected $fillable = ['cpu', 'ram', 'sistema_id', 'macaddress', 'ip', 'impresora_id'];

    public function Sistema(){
        return $this->hasMany(Sistema::class);
    }

    public function Impresora(){
        return $this->hasMany(Impresora::class);
    }
}
