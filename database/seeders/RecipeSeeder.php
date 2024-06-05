<?php

namespace Database\Seeders;

use App\Models\Recipe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $recipes = [
            [
                'name' => 'Pancakes',
                'description' => 'A delicious breakfast treat.',
                'instruction' => 'Mix all ingredients and cook on a griddle.',
                'ingredients' => [1, 3, 4, 5] // IDs of Sugar, Flour, Butter, Eggs
            ],
            [
                'name' => 'Scrambled Eggs',
                'description' => 'A simple breakfast dish.',
                'instruction' => 'Whisk eggs and cook in a pan with butter.',
                'ingredients' => [2, 4, 5] // IDs of Salt, Butter, Eggs
            ]
        ];

        foreach ($recipes as $recipeData) {
            $recipe = Recipe::create([
                'name' => $recipeData['name'],
                'description' => $recipeData['description'],
                'instruction' => $recipeData['instruction']
            ]);

            $recipe->ingredients()->sync($recipeData['ingredients']);
        }
    }
}
