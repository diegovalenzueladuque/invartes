<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computador extends Model
{
    use HasFactory;
    protected $fillable = ['codigo', 'serie', 'cpu', 'ram', 'sistema_id', 'macaddress', 'ip', 'marca_id', 'funcionario_id', 'telefono_id', 'impresora_id','monitor_id'];

    public function marca(){
        return $this->belongsTo(Marca::class);
    }

    public function impresora(){
        return $this->belongsTo(Impresora::class);
    }

    public function funcionario(){
        return $this->belongsTo(Funcionario::class);
    }
    public function telefono(){
        return $this->belongsTo(Telefono::class);
    }
    public function sistema(){
        return $this->belongsTo(Sistema::class);
    }
    public function monitor(){
        return $this->belongsTo(Monitor::class);
    }
}
