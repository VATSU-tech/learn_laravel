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
    
        //
        $etudiant = ModelsEtudiant::all();

        return view('etudiants', ['etudiants'=> $etudiant]);
    }

    public function store(Request $request)
    {   ModelsEtudiant::create([
        'name' => $request->name,
        'age' => $request->age,
        'phone' => $request->phone
    ]);
        return redirect('/');
    }
}
