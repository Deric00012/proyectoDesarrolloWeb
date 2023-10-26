<?php

namespace App\Repositories;

use App\Models\producto;
use App\Repositories\BaseRepository;

class productoRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'nombre',
        'precio',
        'descripcion',
        'is_active'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return producto::class;
    }
}
