<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TripsController;
use Illuminate\Support\Facades\Route;


Route::get('/letra', function () {
    $letra = 'A'; // Letra que deseas mostrar
    return view('index', compact('letra'));
});