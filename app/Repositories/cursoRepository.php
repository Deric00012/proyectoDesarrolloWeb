<?php

namespace App\Repositories;

use App\Models\curso;
use App\Repositories\BaseRepository;

class cursoRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'curso',
        'estado'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return curso::class;
    }
}
