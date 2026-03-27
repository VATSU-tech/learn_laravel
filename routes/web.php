<?php

use App\Http\Controllers\controllerEtudiant;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bonjour', function () {
    return 'Bonjour, le monde!';
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/liste',function(){
    return view('liste');
});

Route::get('/',[controllerEtudiant::class,'index']);
Route::post('/store',[controllerEtudiant::class,'store']);
Route::delete('/delete/{id}',[controllerEtudiant::class,'delete']);
Route::post('/api/save',[controllerEtudiant::class,'api_save']);