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
                'name' => 'Pancake',
                'description' => 'Makanan sarapan yang lezat.',
                'instruction' => 'Campur tepung, gula, garam, mentega cair, dan telur. Aduk rata, tuang di atas wajan panas, masak hingga kecokelatan.',
                'ingredients' => [1, 2, 3, 4, 5, 8] // Gula, Garam, Tepung, Mentega, Telur, Susu
            ],
            [
                'name' => 'Telur Orak-arik',
                'description' => 'Hidangan sarapan sederhana.',
                'instruction' => 'Kocok telur dengan garam, masak di wajan dengan mentega, aduk hingga matang.',
                'ingredients' => [2, 4, 5] // Garam, Mentega, Telur
            ],
            [
                'name' => 'Roti Bakar',
                'description' => 'Roti panggang dengan mentega.',
                'instruction' => 'Olesi roti dengan mentega dan panggang hingga kecokelatan.',
                'ingredients' => [4, 6] // Mentega, Roti
            ],
            [
                'name' => 'Kue Coklat',
                'description' => 'Kue manis dengan rasa coklat.',
                'instruction' => 'Campur gula, tepung, mentega, telur, dan coklat bubuk. Panggang di oven hingga matang.',
                'ingredients' => [1, 3, 4, 5, 7] // Gula, Tepung, Mentega, Telur, Coklat Bubuk
            ],
            [
                'name' => 'Nasi Goreng',
                'description' => 'Nasi yang digoreng dengan bumbu-bumbu.',
                'instruction' => 'Tumis bawang putih dan bawang merah, masukkan nasi, tambahkan garam, kecap manis, dan telur orak-arik. Aduk rata.',
                'ingredients' => [2, 9, 10, 11, 12] // Garam, Bawang Putih, Bawang Merah, Nasi, Kecap Manis
            ],
            [
                'name' => 'Sup Ayam',
                'description' => 'Sup ayam yang hangat dan lezat.',
                'instruction' => 'Rebus ayam dengan wortel, kentang, garam, dan kaldu ayam hingga matang.',
                'ingredients' => [2, 13, 14, 15, 16] // Garam, Ayam, Wortel, Kentang, Kaldu Ayam
            ],
            [
                'name' => 'Salad Buah',
                'description' => 'Salad segar dengan berbagai buah.',
                'instruction' => 'Campur berbagai jenis buah seperti apel, anggur, dan melon. Tambahkan yogurt sebagai dressing.',
                'ingredients' => [17, 18, 19, 20, 21] // Apel, Anggur, Melon, Pisang, Yogurt
            ],
            [
                'name' => 'Omelet',
                'description' => 'Telur dadar dengan sayuran.',
                'instruction' => 'Kocok telur dengan garam, tambahkan sayuran seperti paprika dan tomat, masak di wajan dengan mentega.',
                'ingredients' => [2, 4, 5, 22, 23] // Garam, Mentega, Telur, Paprika, Tomat
            ],
            [
                'name' => 'Spaghetti Bolognese',
                'description' => 'Spaghetti dengan saus daging.',
                'instruction' => 'Masak spaghetti hingga al dente, tumis daging cincang dengan bawang putih, tambahkan saus tomat, campur dengan spaghetti.',
                'ingredients' => [2, 9, 24, 25, 26] // Garam, Bawang Putih, Daging Cincang, Saus Tomat, Spaghetti
            ],
            [
                'name' => 'Ayam Bakar',
                'description' => 'Ayam panggang dengan bumbu spesial.',
                'instruction' => 'Marinasi ayam dengan bumbu kecap, garam, dan bawang putih. Panggang hingga matang.',
                'ingredients' => [2, 9, 13, 27] // Garam, Bawang Putih, Ayam, Kecap
            ],
            [
                'name' => 'Smoothie Buah',
                'description' => 'Minuman segar dari campuran buah.',
                'instruction' => 'Blender berbagai buah seperti pisang, stroberi, dan susu. Sajikan dingin.',
                'ingredients' => [19, 28, 8] // Pisang, Stroberi, Susu
            ],
            [
                'name' => 'Burger',
                'description' => 'Roti isi daging dengan sayuran.',
                'instruction' => 'Panggang daging burger, sajikan di dalam roti dengan selada, tomat, dan keju.',
                'ingredients' => [2, 6, 24, 29, 23, 30] // Garam, Roti, Daging Burger, Selada, Tomat, Keju
            ],
            [
                'name' => 'Sate Ayam',
                'description' => 'Daging ayam yang ditusuk dan dipanggang.',
                'instruction' => 'Tusuk daging ayam, bumbui dengan kecap dan bawang putih, panggang hingga matang.',
                'ingredients' => [2, 9, 13, 27] // Garam, Bawang Putih, Ayam, Kecap
            ],
            [
                'name' => 'Kari Ayam',
                'description' => 'Hidangan ayam dengan saus kari.',
                'instruction' => 'Masak ayam dengan bumbu kari, tambahkan santan, dan biarkan mendidih hingga matang.',
                'ingredients' => [2, 13, 31, 32] // Garam, Ayam, Santan, Bumbu Kari
            ],
            [
                'name' => 'Sop Buntut',
                'description' => 'Sup dengan buntut sapi.',
                'instruction' => 'Rebus buntut sapi dengan wortel, kentang, bawang merah, dan bumbu hingga empuk.',
                'ingredients' => [2, 14, 15, 10, 33] // Garam, Wortel, Kentang, Bawang Merah, Buntut Sapi
            ],
            [
                'name' => 'Lasagna',
                'description' => 'Pasta berlapis dengan saus daging dan keju.',
                'instruction' => 'Susun pasta dengan saus daging, keju, dan saus béchamel, panggang hingga matang.',
                'ingredients' => [2, 3, 4, 24, 25, 34, 35] // Garam, Tepung, Mentega, Daging Cincang, Saus Tomat, Keju, Pasta Lasagna
            ],
            [
                'name' => 'Rendang',
                'description' => 'Daging sapi dengan bumbu khas Indonesia.',
                'instruction' => 'Masak daging sapi dengan bumbu rendang hingga empuk.',
                'ingredients' => [2, 36, 37] // Garam, Daging Sapi, Bumbu Rendang
            ],
            [
                'name' => 'Gado-Gado',
                'description' => 'Salad sayuran dengan saus kacang.',
                'instruction' => 'Campur sayuran dengan saus kacang dan tambahkan telur rebus.',
                'ingredients' => [2, 5, 29, 38, 39] // Garam, Telur, Selada, Tahu, Kacang Tanah
            ],
            [
                'name' => 'Pizza',
                'description' => 'Roti dengan topping keju dan saus tomat.',
                'instruction' => 'Panggang roti dengan topping keju, saus tomat, dan daging sesuai selera.',
                'ingredients' => [2, 3, 30, 25, 40] // Garam, Tepung, Keju, Saus Tomat, Daging
            ],
            [
                'name' => 'Brownies',
                'description' => 'Kue coklat yang lembut dan lezat.',
                'instruction' => 'Campur gula, tepung, mentega, coklat, dan telur. Panggang di oven hingga matang.',
                'ingredients' => [1, 3, 4, 5, 7] // Gula, Tepung, Mentega, Telur, Coklat Bubuk
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
