<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// route home page 
Route::get('/', function () {
    $data=[
        "nome"=> "Mariangela",
        "cognome"=>"Fantozzi"
     ];
    return view('home',$data);
});


// route link about us 
Route::get('/about', function () {
  
    return view('about');
});

// route link contatti
Route::get('/contatti', function () {
  
    return view('contatti');
});

// route link log in
Route::get('/log', function () {
  
    return view('log');
});

// route link info
Route::get('/info', function () {
  
    return view('info');
});

