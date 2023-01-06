<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oficina extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    public function unidades(){
        return $this->hasMany(Unidad::class, 'id');
    }
}
