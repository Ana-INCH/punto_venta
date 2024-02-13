<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id_producto
 * @property $id_categoria
 * @property $nombre
 * @property $descripcion
 * @property $precio_unitario
 * @property $imagen
 * @property $estatus
 * @property $existencia
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'id_producto' => 'required',
		'nombre' => 'required',
		'descripcion' => 'required',
		'precio_unitario' => 'required',
		'imagen' => 'required',
		'existencia' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_producto','id_categoria','nombre','descripcion','precio_unitario','imagen','estatus','existencia'];



}
