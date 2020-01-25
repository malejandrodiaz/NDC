<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FormularioController extends Controller
{
    public function index()
    {
        $client = new Client([
            'base_uri' => 'http://localhost:8001/TraerDatos',

            'timeout'  => 2.0,
        ]);
    
        $responses = $client->get('http://localhost:8001/TraerDatos');

        $contenidos = json_decode($responses->getBody());

        $contenidos= $contenidos->data;

        return view('formulario.index',['contenidos'=>$contenidos]);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('formulario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $client = new Client([
            'base_uri' => 'http://localhost:8001/RegistroDatos',

            'timeout'  => 2.0,
        ]);

        $r = $client->request('PUT', 'http://localhost:8001/RegistroDatos', [
            'json' =>   ['name' => $request->input('name'),
                        'lastname' => $request->input('lastname'),
                        'DNI' => $request->input('DNI'),
                        'birthday' => $request->input('birthday')]

        ]);

        $response = json_decode($r->getBody());


        return redirect()->route('formulario.create')->with('message',$response);
    }

}
