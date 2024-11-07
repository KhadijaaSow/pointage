<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employes=Employe::all();

        return view ('employe.index',compact('employes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('employe.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'telephone'=>'required',
            'fonction'=>'required'
        ]);
        $employe=new Employe();
        $employe->nom=$request->nom;
        $employe->prenom=$request->prenom;
        $employe->telephone=$request->telephone;
        $employe->fonction=$request->fonction;
        $employe->save();

        return redirect()->route('employe.index')->with('message','Employés ajouté avec succés');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employe $employe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function present(Employe $employe)
    {
        return view ('employe.present',compact('employe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function absent(Request $request, Employe $employe)
    {
        return view ('employe.absent',compact('employe'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function conges(Employe $employe)
    {
        return view ('employe.conges',compact('employe'));
    }
}
