<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $ingredients = [
            ['name' => 'Sugar'],
            ['name' => 'Salt'],
            ['name' => 'Flour'],
            ['name' => 'Butter'],
            ['name' => 'Eggs']
        ];

        foreach ($ingredients as $ingredient) {
            Ingredient::create($ingredient);
        }
    }
}
