<?php

namespace App\Http\Controllers;


use App\Models\Recipe;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\RecipeResource;

class RecipeController extends Controller
{
    // validation
    public function validateApiKey($apikey)
    {
        // Check if the api key is valid
        return  User::where('api_key', $apikey)->first();
    }


    public function index(Request $request)
    {
        $user_apikey = $this->validateApiKey($request->header('apikey'));

        if (!$user_apikey) {
            return response()->json(RecipeResource::error('Unauthorized'), 404);
        }

        return RecipeResource::collection(Recipe::all());
    }
    // Get recipe by name
    public function getByName(Request $request, $name)
    {
        $user_apikey = $this->validateApiKey($request->header('apikey'));

        if (!$user_apikey) {
            return response()->json(RecipeResource::error('Unauthorized'), 404);
        }
        $recipes = Recipe::where('name', 'LIKE', '%' . $name . '%')->get();

        if ($recipes->isEmpty()) {
            return response()->json(RecipeResource::error('Recipe not found'), 404);
        }

        return RecipeResource::collection($recipes);
    }

    // get by ingredients
    public function getByIngredients(Request $request, $ingredients)
    {
        $user_apikey = $this->validateApiKey($request->header('apikey'));

        if (!$user_apikey) {
            return response()->json(RecipeResource::error('Unauthorized'), 404);
        }

        $ingredients = explode(',', $ingredients);

        $recipes = Recipe::whereHas('ingredients', function ($query) use ($ingredients) {
            $query->whereIn('name', $ingredients);
        })->get();

        if ($recipes->isEmpty()) {
            return response()->json(RecipeResource::error('Recipe not found'), 404);
        }

        return RecipeResource::collection($recipes);
    }

}
