<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iluminacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','description','image','price','stock','status'
    ];
}
