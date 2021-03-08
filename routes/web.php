<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/agenda/{mes}/{ano}', function ($mes,$ano) {
    return ("Viendo la agenda de ") . $mes . " de " . $ano;
});

Route::get('/productosvalidar/{id}/{nombre}', function ($id,$nombre) {
    return ("El producto si se encuentra identificado con el id: ") . $id . " y el nombre " . $nombre;
})->where(array('nombre' => '[a-zA-Z]+'));




Route::post('usercontroller/',[UserController::class, 'index']);


/*
Desarrollar las siguietes rutas en Laravel:
1.Desarrollar una ruta que reciba el area y base y devuelva lo suguiente:
-El area de un triangulo es : 5 y el area de un rectangulo es 9
Para calcular el area de un triangulo se utiliza la siguiente formula:
Area = (Base * Altura) / 2
Para calcular el area de un rectangulo se utiliza la siguiente formula:
Area = base * altura
*/

Route::get('/triangulo/{altura}/{base}', function ($altura,$base) {
    $areat = ($base * $altura) / 2;
    $areac = $base * $altura;
    return ("El area de un triangulo es : ") . $areat . " y el area de un rectangulo es " . $areac;
})-> where(array('nombre' => '[a-zA-Z]+'));

/*
2. Desarrollar una ruta que reciba el nombre, la nota 1, la nota 2 y la nota 3 y devuelva el promedio de ese estudiante y si este aprobó o no la materia, las materias aprobadas los
que tienen un promedio superior a 3.0:
Al final deberá mostrar un mensaje en pantalla por ejemplo de:
Si Aprobó la materia se mostrara el siguiente mensaje:
-El estudiante Juan tiene un promedio de su nota de 4, felicidades aprobó!
Sino Aprobó
-El estudiante Juan tiene un promedio de su nota de 2, Lo siento este estudiante no aprobó!
*/

Route::get('/promedio/{n1}/{n2}/{n3}', function ($n1,$n2,$n3) {
    $prom = round((($n1 + $n2 + $n3) / 3),2);
    if  ($prom >= 3){
        $mensaje = "El estudiante Juan tiene un promedio de su nota de ". $prom . ", felicidades aprobó!";
    }else{
        $mensaje = "El estudiante Juan tiene un promedio de su nota de ". $prom . ", Lo siento este estudiante no aprobó!";
    }
    return ($mensaje);
}) -> where(array('nombre' => '[a-zA-Z]+'));

