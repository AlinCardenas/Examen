<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class Letras extends Controller
{
    public function index(){
        $palabra=  Content::first();
        $letra= explode("",$palabra);
        
        return view('index', compact("letra"));
    }

}
