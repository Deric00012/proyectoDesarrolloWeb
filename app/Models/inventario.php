<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class inventario extends Model
{
    public $table = 'inventarios';

    public $fillable = [
        'id_proveedor',
        'id_producto',
        'stock'
    ];

    protected $casts = [
        'id_proveedor' => 'integer',
        'id_producto' => 'integer',
        'stock' => 'double'
    ];

    public static array $rules = [
        'id_proveedor' => 'required',
        'id_producto' => 'required',
        'stock' => 'required'
    ];

    public function producto()
    {
        return $this->belongsTo(producto::class,'id_producto','id');
    }

    public function proveedor()
    {
        return $this->belongsTo(proveedor::class,'id_proveedor','id');
    }
}
