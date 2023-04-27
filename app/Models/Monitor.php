<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monitor extends Model
{
    use HasFactory;
    protected $fillable = ['modelo', 'serie', 'marca_id'];

    public function marca(){
        return $this->belongsTo(Marca::class);
    }
    public function computadores(){
        return $this->hasMany(Computador::class);
    }
}
