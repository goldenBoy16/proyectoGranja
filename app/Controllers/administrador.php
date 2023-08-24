<?php

namespace App\Controllers;

class Administrador extends BaseController
{
    public function index()
    {
        return view('administrador/inc/cabecera').
		view('administrador/inc/menu_Lateral').
		view('administrador/inc/menu_Superior').
		view('administrador/principal').
		view('administrador/inc/pie');
    }

    
}