<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Record;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Client;

class JSONController extends Controller
{

    public function index()
    {

        $client = new Client([
            'base_uri' => 'https://jsonplaceholder.typicode.com/posts',

            'timeout'  => 2.0,
        ]);


        $response = $client->get('https://jsonplaceholder.typicode.com/posts');

        $response = json_decode($response->getBody());


        return $response;

    }

}