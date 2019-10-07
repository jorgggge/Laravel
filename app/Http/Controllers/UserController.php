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

    public function PaguinaPrincipal(){
    	return "Olas";
    }
}

