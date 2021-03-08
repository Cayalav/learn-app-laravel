<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;


class UserController extends BaseController
{
    function index(Request $request){
        $address = $request->input('address');
        echo "Hola Controlador, Bienvenido Estudiante: ".$address;
    }
}