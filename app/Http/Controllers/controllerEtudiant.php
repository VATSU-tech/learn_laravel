<?php

namespace App\Http\Controllers;

use App\Models\etudiant as ModelsEtudiant;
use Illuminate\Http\Request;

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

    public function delete($id)
    {
        $etudiant = ModelsEtudiant::find($id);
        if($etudiant){
            $etudiant->delete($id);
            return redirect('/');
        }else{
            return redirect('/')->with('error', 'Etudiant not found');
        }

    }

    public function api_save(Request $request)
    {
        $etudiant = ModelsEtudiant::create([
            'name' => $request->name,
            'age' => $request->age,
            'phone' => $request->phone
        ]);
        return response()->json([
            'message' => 'Etudiant created successfully',
            'etudiant' => $etudiant
        ], 201);
    }

    public function api_see()
    {
        $etudiant = ModelsEtudiant::all();

        return response()->json([
            'message'=> 'leste des etudians',
            'data'=> $etudiant
        ]);
    }
}
