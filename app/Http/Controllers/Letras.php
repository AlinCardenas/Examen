<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class Letras extends Controller
{
    public function index(){
        $palabra=  Content::first();
        // dd($palabra->word);
         return view('index', compact("palabra"));
    }

}
