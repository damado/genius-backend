<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoProducto;

class TipoProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arrAll = TipoProducto::all();
        $arrResult = array();
        foreach ($arrAll as $tipoProducto) {
            if($tipoProducto->productos()->get()->count() != 0) {
                array_push($arrResult, $tipoProducto);
            }
        }
        return $arrResult;
    }

    /**
     * Retorna todos los productos asociados al tipo de producto, ordenados por valor y chequeando la vigencia.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function productos($id)
    {
		$tipoProducto = TipoProducto::find($id);
        return $tipoProducto->productos()->orderBy('valor')->whereDate('fecha_vigencia_hasta', '>=', date('Y-m-d'))->with('imagenes', 'iconos')->get();
    }

}
