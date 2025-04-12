<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Campo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'ubicacion',
        'numero_hoyos',
        'tipo',
        'tarifa',
    ];
}
