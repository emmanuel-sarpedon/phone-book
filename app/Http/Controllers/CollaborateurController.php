<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entreprise;
use App\Models\Collaborateur;

class CollaborateurController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Collaborateur::class, 'collaborateur');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collaborateurs = Collaborateur::all();

        foreach ($collaborateurs as $collaborateur) {
            $collaborateur['nom_entreprise'] = $collaborateur->entreprise->nom;
            $collaborateur['tel_entreprise'] = $collaborateur->entreprise->telephone;
        }

        return view('collaborateurs.index', ['collaborateurs' => $collaborateurs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $entreprises = Entreprise::all();
        return view('collaborateurs.create', ['entreprises' => $entreprises]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $collaborateur = new Collaborateur;

        $collaborateur->civility = $request->civility;
        $collaborateur->nom = $request->nom;
        $collaborateur->prenom = $request->prenom;
        $collaborateur->rue = $request->rue;
        $collaborateur->code_postal = $request->code_postal;
        $collaborateur->ville = $request->ville;
        $collaborateur->telephone = $request->telephone;
        $collaborateur->email = $request->email;
        $collaborateur->entreprise_id = $request->entreprise_id;

        $collaborateur->save();

        return redirect()->route('collaborateur.show', ['collaborateur' => $collaborateur]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Collaborateur $collaborateur)
    {
        return view('collaborateurs.show', ['collaborateur' => $collaborateur]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Collaborateur $collaborateur)
    {
        $entreprises = Entreprise::all();
        return view('collaborateurs.edit', ['collaborateur' => $collaborateur, 'entreprises' => $entreprises]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Collaborateur $collaborateur)
    {
        $collaborateur->civility = $request->civility;
        $collaborateur->nom = $request->nom;
        $collaborateur->prenom = $request->prenom;
        $collaborateur->rue = $request->rue;
        $collaborateur->code_postal = $request->code_postal;
        $collaborateur->ville = $request->ville;
        $collaborateur->telephone = $request->telephone;
        $collaborateur->email = $request->email;
        $collaborateur->entreprise_id = $request->entreprise_id;

        $collaborateur->save();

        return redirect()->route('collaborateur.show', ['collaborateur' => $collaborateur]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Collaborateur $collaborateur)
    {
        $collaborateur_identity = "$collaborateur->nom $collaborateur->prenom";

        $collaborateur->delete();

        return view('collaborateurs.delete-confirmation', ['collaborateur_identity' => $collaborateur_identity]);
    }
}
