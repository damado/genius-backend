<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoProducto extends Model
{
	protected $table = 'productos_tipos';

	/**
	* Retorna los productos del tipo de producto.
	*/
	public function productos()
	{
		return $this->hasMany('App\Producto');
	}
}
