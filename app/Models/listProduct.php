<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class listProduct
 * @package App\Models
 * @version December 5, 2019, 7:01 pm UTC
 *
 * @property string Nombre
 * @property string Precio
 * @property string Imagen
 * @property integer Stock
 * @property string Descripcion
 */
class listProduct extends Model
{
    use SoftDeletes;

    public $table = 'list_products';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'Nombre',
        'Precio',
        'Imagen',
        'Stock',
        'Descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Nombre' => 'string',
        'Precio' => 'string',
        'Imagen' => 'string',
        'Stock' => 'integer',
        'Descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Precio' => 'numeric'
    ];

    
}
