<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Entreprise;

class EntrepriseController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Entreprise::class, 'entreprise');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $entreprises = Entreprise::all();

        $entreprises = DB::table('entreprises')->where([
            ['nom', 'like', '%' . $request->nom_filter . '%'],
            ['ville', 'like', '%' . $request->ville_filter . '%'],
            ['email', 'like', '%' . $request->email_filter . '%']
        ])->get();

        return view('entreprises.index', ['entreprises' => $entreprises, 'filters' => [$request->nom_filter, $request->ville_filter, $request->email_filter]]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('entreprises.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $entreprise = new Entreprise;

        $entreprise->nom = $request->nom;
        $entreprise->rue = $request->rue;
        $entreprise->code_postal = $request->code_postal;
        $entreprise->ville = $request->ville;
        $entreprise->telephone = $request->telephone;
        $entreprise->email = $request->email;

        $entreprise->save();

        return redirect()->route('entreprise.show', ['entreprise' => $entreprise]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Entreprise $entreprise)
    {
        return view('entreprises.show', ['entreprise' => $entreprise]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Entreprise $entreprise)
    {
        return view('entreprises.edit', ['entreprise' => $entreprise]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entreprise $entreprise)
    {

        $entreprise->nom = $request->nom;
        $entreprise->rue = $request->rue;
        $entreprise->code_postal = $request->code_postal;
        $entreprise->ville = $request->ville;
        $entreprise->telephone = $request->telephone;
        $entreprise->email = $request->email;

        $entreprise->save();

        return redirect()->route('entreprise.show', ['entreprise' => $entreprise]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entreprise $entreprise)
    {
        $entreprise = Entreprise::find($entreprise->id);

        $collaborateurs = DB::table('collaborateurs')->where('entreprise_id', '=', $entreprise->id)->get();

        $entreprise_nom = $entreprise->nom;

        if (count($collaborateurs) > 0) {
            return view('entreprises.delete-forbidden', ['entreprise_nom' => $entreprise_nom, 'collaborateurs' => $collaborateurs]);
        };

        $entreprise->delete();

        return view('entreprises.delete-confirmation', ['entreprise_nom' => $entreprise_nom]);
    }
}
