<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
    use HasFactory;
    protected $fillable = ['cpu', 'ram', 'sistema_id', 'macaddress', 'ip', 'impresora_id'];

    public function sistema(){
        return $this->belongsTo(Sistema::class);
    }

    public function impresora(){
        return $this->belongsTo(Impresora::class);
    }
    public function computadores(){
        return $this->hasMany(Computador::class);
    }
}
