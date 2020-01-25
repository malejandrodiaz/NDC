<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\StoreCambiarCorreo;

class CambiarCorreoController extends Controller
{   
    public function index()
    {		
			return view('admin.correo');

    }


    public function something(StoreCambiarCorreo $request){
        // some code

        $correo = $request->input('correo');
		$contra = $request->input('contra');


        $env_update = $this->changeEnv([
            'MAIL_USERNAME'   => $correo, 
            'MAIL_PASSWORD'   => $contra
        ]);
        if($env_update){

            return view('admin.correo');

        } else {
            // Do something else
        }
        // more code
    }
    
    protected function changeEnv($data = array()){
        if(count($data) > 0){

            // Read .env-file
            $env = file_get_contents(base_path() . '/.env');

            // Split string on every " " and write into array
            $env = preg_split('/\s+/', $env);;

            // Loop through given data
            foreach((array)$data as $key => $value){

                // Loop through .env-data
                foreach($env as $env_key => $env_value){

                    // Turn the value into an array and stop after the first split
                    // So it's not possible to split e.g. the App-Key by accident
                    $entry = explode("=", $env_value, 2);

                    // Check, if new key fits the actual .env-key
                    if($entry[0] == $key){
                        // If yes, overwrite it with the new one
                        $env[$env_key] = $key . "=" . $value;
                    } else {
                        // If not, keep the old one
                        $env[$env_key] = $env_value;
                    }
                }
            }

            // Turn the array back to an String
            $env = implode("\n", $env);

            // And overwrite the .env with the new data
            file_put_contents(base_path() . '/.env', $env);
            
            return true;
        } else {
            return false;
        }
    }
}