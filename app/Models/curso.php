<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class curso extends Model
{
    public $table = 'cursos';

    public $fillable = [
        'curso',
        'estado'
    ];

    protected $casts = [
        'curso' => 'string',
        'estado' => 'double'
    ];

    public static array $rules = [
        'curso' => 'required',
        'estado' => 'required'
    ];

    
}
