<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminRecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recipe = Recipe::all();
        return view('admin.recipe.recipe', compact('recipe'));
    }

    public function totalIngredient()
    {
        $totalRecipes = Recipe::count();
        Session::put('totalRecipes', $totalRecipes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ingredients = Ingredient::all();
        return view('admin.recipe.create', compact('ingredients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'instruction' => 'required',
            'ingredients' => 'required|array',
        ]);

        // Simpan recipe
        $recipe = Recipe::create([
            'name' => $request->name,
            'description' => $request->description,
            'instruction' => $request->instruction,
        ]);

        // Attach ingredients ke recipe
        $recipe->ingredients()->attach($request->ingredients);

        return redirect()->route('recipe.index')->with('success', 'Recipe created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $recipe = Recipe::findOrFail($id);
        // Mengambil semua bahan untuk checkbox
        $ingredients = Ingredient::all();
        // Bahan yang dipilih
        $selectedIngredients = $recipe->ingredients->pluck('id')->toArray();

        return view('admin.recipe.edit', compact('recipe', 'ingredients', 'selectedIngredients'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'instruction' => 'required',
            'ingredients' => 'required|array',
        ]);

        // Update recipe
        $recipe = Recipe::findOrFail($id);
        $recipe->update([
            'name' => $request->name,
            'description' => $request->description,
            'instruction' => $request->instruction,
        ]);

        // Sync ingredients
        $recipe->ingredients()->sync($request->ingredients);

        return redirect()->route('recipe.index')->with('success', 'Recipe updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $recipe = Recipe::findOrFail($id);
        $recipe->delete();

        return redirect()->route('recipe.index');
    }
}
