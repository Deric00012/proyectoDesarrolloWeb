<?php

namespace App\Repositories;

use App\Models\cliente;
use App\Repositories\BaseRepository;

class clienteRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'nombre',
        'apellido',
        'fecha',
        'direccion',
        'telefono',
        'cui',
        'nit'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return cliente::class;
    }
}
