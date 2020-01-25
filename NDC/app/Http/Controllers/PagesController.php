<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
	
		public function FormularioController() 
		{  
			return view('formulario.create', ['title' => 'Pàgina de inicio']);
		}	

}
