<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
    	return "Usuarios";
    }

    public function Numero($N){

    	return "Soy el numero $N";
    }

    // Llamar un paguina web
    public function PaguinaPrincipal(){

    	$Personas = [
    		'Jorge',
    		'Arturo',
    		'Ana'
    	];

    	return view('prueba',[
    		'Personas' => $Personas,
    		'Texto' => 'Hola Gente de Youtube'
    	]);
    }

    public function Prueba(){

    }
}

