<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    public $table = 'clientes';

    public $fillable = [
        'nombre',
        'apellido',
        'fecha',
        'direccion',
        'telefono',
        'cui',
        'nit'
    ];

    protected $casts = [
        'nombre' => 'string',
        'apellido' => 'string',
        'fecha' => 'date',
        'direccion' => 'string',
        'telefono' => 'string',
        'cui' => 'string',
        'nit' => 'string'
    ];

    public static array $rules = [
        'nombre' => 'required',
        'apellido' => 'required',
        'fecha' => 'required',
        'direccion' => 'required',
        'telefono' => 'required',
        'cui' => 'required',
        'nit' => 'required'
    ];

    
}
