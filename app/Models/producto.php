<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    public $table = 'productos';

    public $fillable = [
        'nombre',
        'precio',
        'descripcion',
        'is_active'
    ];

    protected $casts = [
        'nombre' => 'string',
        'precio' => 'double',
        'descripcion' => 'string',
        'is_active' => 'string'
    ];

    public static array $rules = [
        'nombre' => 'required',
        'precio' => 'required',
        'is_active' => 'required'
    ];

    
}
