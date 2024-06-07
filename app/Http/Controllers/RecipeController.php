<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Recipe;
use Illuminate\Http\Request;
use App\Http\Resources\RecipeResource;
use App\Http\Resources\RecipeCollection;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class RecipeController extends Controller
{
    // Validasi API Key
    private function validateApiKey($apikey)
    {
        try {
            return User::where('api_key', $apikey)->firstOrFail();
        } catch (ModelNotFoundException $e) {
            throw new \Exception('Unauthorized', 401);
        }
    }

    // Menampilkan semua resep atau berdasarkan filter
    public function index(Request $request)
    {
        try {
            $this->validateApiKey($request->header('api-key'));
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], $e->getCode());
        }

        $query = Recipe::query();

        if ($request->has('nama')) {
            $query->where('name', 'LIKE', '%' . $request->nama . '%');
        }

        if ($request->has('bahan')) {
            $ingredients = explode(',', $request->bahan);
            $query->whereHas('ingredients', function ($q) use ($ingredients) {
                $q->whereIn('name', $ingredients);
            });
        }

        $recipes = $query->get();

        if ($recipes->isEmpty()) {
            return response()->json(['error' => 'Recipe not found'], 404);
        }

        return new RecipeCollection($recipes);
    }
}
