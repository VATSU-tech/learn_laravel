<?php

namespace App\Http\Controllers;

use App\Models\etudiant as ModelsEtudiant;
use Illuminate\Http\Request;
use App\Modesl\etudiant;

class controllerEtudiant extends Controller
{
    //
    public function index()
    {
        $etudiant = ModelsEtudiant::all();
    }
}
