<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empresa extends Model
{
    use HasFactory;

    protected $fillable = [
        'correo1','correo2','numero1','numero2', 'logo','imagen_fondo','direccion','georeferencia'
    ];
}
