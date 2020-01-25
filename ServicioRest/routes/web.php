<?php


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->put('/RegistroDatos', 'RecordController@store');

$router->get('/TraerDatos', 'RecordController@index');

$router->get('/TraerDatosJSon', 'JSONController@index');


/*
$router->put('/RegistroDatos', function (Request $request) use ($router) {
    return response()->json(['name' => $name, 'lastname' => $lastname, 'DNI' => $DNI, 'birthday' => $birthday]);
});
*/