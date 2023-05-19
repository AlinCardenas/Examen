<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class Letras extends Controller
{
    public function index(){
        $palabra=  Content::first();   
        
        $letras = str_split($palabra);

// Asigna cada letra a una variable
$letra1 = $letras[0];
$letra2 = $letras[1];
$letra3 = $letras[2];
$letra4 = $letras[3];

        return view('index', compact("palabra"));
    }

}
