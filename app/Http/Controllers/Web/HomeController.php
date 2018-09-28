<?php

namespace App\Http\Controllers\Web;

use App\Servicio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){

        $restauPopulares = Servicio::Where('estado','activo')->Where('id_tipoServicio',2)->take(4)->get();
        $cantidadRestau = Servicio::Where('estado','activo')->count();
        return view('web.home.home',compact('restauPopulares','cantidadRestau'));
    }
}
