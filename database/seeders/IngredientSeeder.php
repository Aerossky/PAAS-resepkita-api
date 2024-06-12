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
            ['name' => 'Gula'],
            ['name' => 'Garam'],
            ['name' => 'Tepung'],
            ['name' => 'Mentega'],
            ['name' => 'Telur'],
            ['name' => 'Roti'],
            ['name' => 'Coklat Bubuk'],
            ['name' => 'Susu'],
            ['name' => 'Bawang Putih'],
            ['name' => 'Bawang Merah'],
            ['name' => 'Nasi'],
            ['name' => 'Kecap Manis'],
            ['name' => 'Ayam'],
            ['name' => 'Wortel'],
            ['name' => 'Kentang'],
            ['name' => 'Kaldu Ayam'],
            ['name' => 'Apel'],
            ['name' => 'Anggur'],
            ['name' => 'Melon'],
            ['name' => 'Pisang'],
            ['name' => 'Yogurt'],
            ['name' => 'Paprika'],
            ['name' => 'Tomat'],
            ['name' => 'Daging Cincang'],
            ['name' => 'Saus Tomat'],
            ['name' => 'Spaghetti'],
            ['name' => 'Kecap'],
            ['name' => 'Stroberi'],
            ['name' => 'Selada'],
            ['name' => 'Keju'],
            ['name' => 'Santan'],
            ['name' => 'Bumbu Kari'],
            ['name' => 'Buntut Sapi'],
            ['name' => 'Saus Béchamel'],
            ['name' => 'Pasta Lasagna'],
            ['name' => 'Daging Sapi'],
            ['name' => 'Bumbu Rendang'],
            ['name' => 'Tahu'],
            ['name' => 'Kacang Tanah'],
            ['name' => 'Daging (untuk pizza)']
        ];

        foreach ($ingredients as $ingredient) {
            Ingredient::create($ingredient);
        }
    }
}
