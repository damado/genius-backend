<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{

    /**
     * Envia un mail a la agencia con los datos ingresados por el usuario.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function send(Request $request)
    {
    	$data = $request->all();
			\Mail::send('contact', $data, function($message) use ($request)
				{
				   //remitente
				   $message->from($request['email'], $request['nombre']);

				   //asunto
				   $message->subject('Consulta Amitie Viajes');

				   //receptor
				   $message->to(env('CONTACT_MAIL'), env('CONTACT_NAME'));

				}
			);
    }

}
