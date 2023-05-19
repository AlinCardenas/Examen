<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class Letras extends Controller
{
    public function index(){
        $palabra=  Content::first(); 
       
        $letras = [];

        foreach (str_split($palabra->word) as $letra) {
            $letras[] = $letra;
        }       
        return $letras;
    }

    public function uno(){
        $letras = $this->index();
        return view('uno', compact("letras"));
    }
    public function dos(){
        $letras = $this->index();
        return view('dos', compact("letras"));
    }
    public function tres(){
        $letras = $this->index();
        return view('tres', compact("letras"));
    }
    public function cuatro(){
        $letras = $this->index();
        return view('cuatro', compact("letras"));
    }

}
