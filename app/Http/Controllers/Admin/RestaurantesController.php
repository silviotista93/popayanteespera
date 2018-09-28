<?php

namespace App\Http\Controllers\Admin;

use App\Servicio;
use App\TipoRestaurante;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class RestaurantesController extends Controller
{
    public function addRestaurante($id){
        $sitio = Servicio::where('id','=',$id)->first();
        $tipoRestaurantes= TipoRestaurante::all();
      return  view('admin.restaurants.add-restaurant',compact('sitio','tipoRestaurantes'));
    }

    public function updateRestaurante(Request $request, Servicio $servicio){

        $data = $request->validate([
            'nombre' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'telefono_2' => '',
            'imagen' => '',
            'foto_sitio' => '',
            'id_tipoRestaurante' => 'required',
            'breve_descripcion' => 'required',
            'descripcion' => 'required',
        ]);
        $servicio->update($data);

        return back()->with('flash','Cambios realizados correctamente');
    }
    public function imagen(Request $request)
    {
        $imagen = $request->file('imagen');
        $imageUrl = $imagen->store('public/restaurantes');
        return Storage::url($imageUrl);
    }
    public function fotoSitio(Request $request)
    {
        $fotoSitio = $request->file('foto_sitio');
        $fotoSitioUrl = $fotoSitio->store('public/restaurantes/sitioFoto');
        return Storage::url($fotoSitioUrl);
    }
}
