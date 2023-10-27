<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class venta extends Model
{
    public $table = 'ventas';

    public $fillable = [
        'id_producto',
        'cantidad',
        'fecha',
        'id_cliente'
    ];

    protected $casts = [
        'id_producto' => 'integer',
        'cantidad' => 'double',
        'fecha' => 'date',
        'id_cliente' => 'integer'
    ];

    public static array $rules = [
        'id_producto' => 'required',
        'cantidad' => 'required',
        'fecha' => 'required',
        'id_cliente' => 'required'
    ];

    
}
