<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Ramsey\Uuid\Uuid;

class IngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $ingredient = Ingredient::all();
        return view('admin.ingredient.ingredient', compact('ingredient'));
    }

    public function totalIngredient()
    {
        $totalIngredients = Ingredient::count();
        Session::put('totalIngredients', $totalIngredients);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.ingredient.ingredient-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        $validatedData = $validator->validated();
        Ingredient::create($validatedData);
        $this->totalIngredient();

        return redirect()->route('ingredient.index')->with('status', 'Data added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // $ingredient = Ingredient::findOrFail($id);
        // return view('admin.ingredient.ingredient-detail', ['ingredient' => $ingredient]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $ingredient = Ingredient::findOrFail($id);
        return view('admin.ingredient.ingredient-edit', compact('ingredient'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $ingredient = Ingredient::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        $ingredient->update([
            'name' => $request->name,
        ]);

        return redirect()->route('ingredient.index')->with('success', 'Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ingredient = Ingredient::findOrFail($id);
        $ingredient->delete();
        $this->totalIngredient();

        return redirect()->route('ingredient.index');
    }
}
