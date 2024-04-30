<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recette;

class RecetteController extends Controller
{
    /**
     * Affiche une liste des produits.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recettes = Recette::all();
        return view('index', ["recettes" => $recettes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("form");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'required|string|max:500',
            'ingredients' => 'required|string',
            'etapes' => 'required|string',
        ]);

        $recette = new Recette();
        $recette->nom = $validatedData['nom'];
        $recette->description = $validatedData['description'];
        $recette->ingredients = $validatedData['ingredients'];
        $recette->etapes = $validatedData['etapes'];

        try {
            $recette->save();
            return redirect()->route('recettes.index')->with('success', 'Recette enregistrée avec succès !');
        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['save_error' => 'Erreur lors de l\'enregistrement: ' . $e->getMessage()]);
        }
    }

    public function show(Recette $recette)
    {
        return view('recette', ["recette" => $recette]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $recette = Recette::where('id', $id)->first();

        // dd($recette);

        return view('edit', ["recette" => $recette]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Recette $recette,)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'required|string|max:500',
            'ingredients' => 'required|string',
            'etapes' => 'required|string',
        ]);

        $recette->nom = $validatedData['nom'];
        $recette->description = $validatedData['description'];
        $recette->ingredients = $validatedData['ingredients'];
        $recette->etapes = $validatedData['etapes'];

        $recette->update();

        return redirect()->route('recettes.index')->with('success', 'Recette mise à jour avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recette $recette)
    {
        $recette->delete();

        return redirect()->route('recettes.index')->with('success', 'Recette supprimée avec succès !');
    }
}
