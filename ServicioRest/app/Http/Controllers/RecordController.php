<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Record;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination;


class RecordController extends Controller
{

    public function index()
    {
        /* 
            DEFINICION DE VARIABLES
        */
        $records = Record::simplePaginate(10);

        return $records;


    }
    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function store(Request $request)
    {
        /* 
            DEFINICION DE VARIABLES
        */
        $name = $request->input('name');
        $lastname = $request->input('lastname');
        $DNI = $request->input('DNI');
        $birthday = $request->input('birthday');

        /*
            VALIDACION DE CAMPOS
        */
        if(strlen($DNI)>15 OR strlen($name)>50 OR strlen($lastname)>50) {
            $error=500;
        } else {
            $error=201;

            /*
                INSERCION DE REGISTRO
            */
            $record = new Record;

            $record->DNI = $DNI;
            $record->name = $name;
            $record->lastname = $lastname;
            $record->birthday = $birthday;

            $record->save();
        }
        
        return $error;


    }

}