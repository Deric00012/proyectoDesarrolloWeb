<?php

namespace App\Repositories;

use App\Models\inventario;
use App\Repositories\BaseRepository;

class inventarioRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'id_proveedor',
        'id_producto',
        'stock'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return inventario::class;
    }
}
