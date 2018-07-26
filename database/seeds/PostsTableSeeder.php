<?php

use App\Category;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = [
            'uri' => uniqid('post-'),
            'user_id' => 1,
            'thumbnail' => '/img/owl.jpg',
            'title' => 'Test article',
            'body' => 'This is a test article, nothing else.',
            'small_abstract' => 'Just the main idea',
            'medium_abstract' => 'The main idea and some more details'
        ];

        foreach (Category::all() as $category) {
            for ($i = 0; $i < 15; $i++) {
                $category->posts()->create($post);
            }
        }
    }
}
