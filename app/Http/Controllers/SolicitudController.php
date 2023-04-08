<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolicitudController extends Controller
{
    public function actSolicitud(Request $req)
    {
    	return view('solicitud.solicitud');
    }
}
