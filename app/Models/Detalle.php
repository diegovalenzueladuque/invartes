<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
    use HasFactory;
    protected $fillable = ['cpu', 'ram', 'sistema_id', 'macaddress', 'ip', 'impresora_id'];

    public function Sistema(){
        return $this->hasMany(Sistema::class, 'id');
    }

    public function Impresora(){
        return $this->hasMany(Impresora::class, 'id');
    }
}
