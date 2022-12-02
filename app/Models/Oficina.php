<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oficina extends Model
{
    use HasFactory;

    public function Unidad(){
        return $this->belongsTo(Unidad::class, 'id');
    }
}
