<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'uri' => 'coding',
                'name' => 'Coding',
                'description' => 'Everything related to programming and development',
                'thumbnail' => '/img/owl.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'uri' => 'cooking',
                'name' => 'Cooking',
                'description' => 'My culinary adventures',
                'thumbnail' => '/img/owl.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'uri' => '3d-printing',
                'name' => '3D Printing',
                'description' => 'My incursion into my new hobby',
                'thumbnail' => '/img/owl.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'uri' => 'tabletop-games',
                'name' => 'Tabletop games',
                'description' => 'I like D&D',
                'thumbnail' => '/img/owl.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'uri' => 'random',
                'name' => 'Random',
                'description' => 'Anything goes',
                'thumbnail' => '/img/owl.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
