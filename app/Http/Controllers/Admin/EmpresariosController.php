<?php

namespace App\Http\Controllers\Admin;

use App\TipoServicio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmpresariosController extends Controller
{
    public function index(){

      $tipoServicios = TipoServicio::all();
        return view('admin.empresas.todos-empresarios',compact('tipoServicios'));
    }
}
