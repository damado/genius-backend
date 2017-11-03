<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Imagen;

class Producto extends Model
{
  protected $table = 'productos';

  /**
   * Retorna las imagenes del producto.
   */
  public function imagenes()
  {
  	return $this->hasMany('App\Imagen');
  }

  /**
   * Retorna los iconos del producto.
   */
  public function iconos()
  {
  	return $this->belongsToMany('App\Icono');
  }

  /**
   * Retorna las bases y condiciones para el producto.
   */
  public function basesYCondiciones()
  {
  	return $this->belongsTo('App\BasesYCondiciones');
  }

  /**
   * Retorna los comentarios del producto.
   */
  public function comentarios()
  {
  	return $this->belongsToMany('App\Comentario');
  }

}
