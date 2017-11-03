<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suscriptor;
use Mailgun\Mailgun;

class SuscriptorController extends Controller
{
		/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return Suscriptor::get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newSuscriptor = new Suscriptor;
        $newSuscriptor->mail = $request->mail;
        $newSuscriptor->fecha_alta = date('Y-m-d');
        $newSuscriptor->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    	Suscriptor::find($id)->delete();
    }

		/**
     * Busca un suscriptor por mail..
     *
     * @return \Illuminate\Http\Response
     */
    public function buscarPorMail($mail)
    {
    	$suscriptor = Suscriptor::where('mail', '=', $mail)->first();
    	if ($suscriptor !== null) {
      	return $suscriptor;
    	}
    	return array();
    }
}
