<?php

namespace App\Http\Controllers\Web;

use App\Servicio;
use App\TipoRestaurante;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RestauranteController extends Controller
{
    public function showRestaurante($id){
        $detalleRestaurante = Servicio::where('id',$id)->first();
        return view('web.restaurante.show-restaurante',compact('detalleRestaurante'));
    }
    public function allRestaurante(){
        $restaurantes = Servicio::Where('estado','activo')->Where('id_tipoServicio',2)->take(6)->get();
        $cantidadRestau = Servicio::Where('estado','activo')->count();
        $tipoRestaurantes= TipoRestaurante::all();
        return view('web.restaurante.all-restaurantes',compact('restaurantes','cantidadRestau','tipoRestaurantes'));
    }
}
