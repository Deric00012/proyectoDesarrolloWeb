<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class proveedor extends Model
{
    public $table = 'proveedors';

    public $fillable = [
        'nombre',
        'nit',
        'direccion',
        'telefono',
        'email',
        'is_active'
    ];

    protected $casts = [
        'nombre' => 'string',
        'nit' => 'string',
        'direccion' => 'string',
        'telefono' => 'string',
        'email' => 'string',
        'is_active' => 'string'
    ];

    public static array $rules = [
        'nombre' => 'required',
        'nit' => 'required',
        'direccion' => 'required',
        'telefono' => 'required',
        'email' => 'required',
        'is_active' => 'required'
    ];

    
}
