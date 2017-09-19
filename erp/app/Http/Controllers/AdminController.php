<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Http\Request;
use App\Empleado;
use App\Empresa;
use App\User;
use DB;
use Illuminate\Support\Facades\Redirect;


class AdminController extends RegisterController
{
    function crear(Request $request){
        $admin = new Empleado();
        $admin -> ci = $request -> get('ci');
        $admin -> nombre = $request -> get('nombre');
        $admin -> direccion = $request -> get('direccion');
        $admin -> ocupacion = 'Administrador';
        $admin -> telefono = $request -> get('telefono');
        $admin -> tipo = '1';
        $admin -> idEmpresa = null;
        $admin -> save();

        $ultimo=DB::table('empleado')
            ->where ('ci','=', $request -> get('ci'))
            ->select('id')->get();

        $user2 = new User();
        $user2 -> name = $request -> get('nombre');
        $user2 -> email = $request -> get('email');
        $user2 -> password = bcrypt($request->get('password'));
        $user2 -> remember_token = null;
        $user2 -> tipo = '1';
        $user2 -> idEmpleado = $ultimo[0]->id;
        $user2 -> idCliente = null;
        $user2 -> save();

        $empresa = new Empresa();
        $empresa -> nit = $request -> get('nit');
        $empresa -> nombre = $request -> get('empresa');
        $empresa -> direccion = $request -> get('dEmpresa');
        $empresa -> telefono = $request -> get('tEmpresa');
        $empresa -> email = $request -> get('eEmpresa');
        $empresa -> idEmpleado = $ultimo[0]->id;
        $empresa -> save();


        return Redirect::to('login');
    }
}
