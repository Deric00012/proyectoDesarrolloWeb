<?php

namespace App\Repositories;

use App\Models\venta;
use App\Repositories\BaseRepository;

class ventaRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'id_producto',
        'cantidad',
        'fecha',
        'id_cliente'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return venta::class;
    }
}
