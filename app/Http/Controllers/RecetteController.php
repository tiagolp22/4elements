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
        return view('index', ["recettes" => $recettes, "title" => "4 Éléments"]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Recette $recette)
    {
        return view('recette', ["recette" => $recette]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
