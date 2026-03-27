<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\controllerEtudiant;

Route::post('/save',[controllerEtudiant::class,'api_save']);