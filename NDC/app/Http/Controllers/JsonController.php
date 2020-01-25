<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class JsonController extends Controller
{
    public function index()
    {
        $client = new Client([
            'base_uri' => 'http://localhost:8001/TraerDatosJSon',

            'timeout'  => 2.0,
        ]);
    
        $contenidos = $client->get('http://localhost:8001/TraerDatosJSon');

        $contenidos = json_decode($contenidos->getBody());



        return view('json.index',['contenidos'=>$contenidos]);

    }
}
