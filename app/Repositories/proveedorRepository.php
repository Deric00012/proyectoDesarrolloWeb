<?php

namespace App\Repositories;

use App\Models\proveedor;
use App\Repositories\BaseRepository;

class proveedorRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'nombre',
        'nit',
        'direccion',
        'telefono',
        'email',
        'is_active'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return proveedor::class;
    }
}
