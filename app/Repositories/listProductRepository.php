<?php

namespace App\Repositories;

use App\Models\listProduct;
use App\Repositories\BaseRepository;

/**
 * Class listProductRepository
 * @package App\Repositories
 * @version December 5, 2019, 7:01 pm UTC
*/

class listProductRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Nombre',
        'Precio',
        'Imagen',
        'Stock',
        'Descripcion'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return listProduct::class;
    }
}
