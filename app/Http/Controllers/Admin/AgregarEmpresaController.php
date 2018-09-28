<?php

namespace App\Http\Controllers\Admin;

use App\Servicio;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;

class AgregarEmpresaController extends Controller
{
    public function index(){

        return view('admin.empresas.agregar-empresa');
    }

    public function agregarEmpresario(Request $request){

        $rule = [

            'name' => 'required',
            'apellidos' => 'required',
            'telefono' => 'required',
            'telefono_2' => '',
            'email' => 'required|string|email|max:255|unique:users',
        ];

        $data = $request->validate($rule);

        $password  =  '12345';
        $data['password'] = bcrypt($password);
        $user = User::create($data);
        $user->assignRole($request->rol);

        return back()->with('flash','Empresario creado exitosamente');
    }

    public function asignarServicio(Request $request){
        $tipoServicio = $request->get('seleccionar_tipoServicio');
        $idUsuario = $request->get('id_empresario');

        $crearServicio = Servicio::create([
            'nombre' => 'Ningún nombre',
            'id_tipoServicio' => $tipoServicio,
            'id_usuario' => $idUsuario
        ]);
        $crearServicio->servicios()->attach($request->get('id_empresario'));
        return back()->with('flash','Servicio asignado exitosamente');
    }
}
