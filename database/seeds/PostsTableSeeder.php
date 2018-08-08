<?php

use App\Category;
use App\Post;
use Faker\Generator;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Generator $faker)
    {
        foreach (Category::all() as $category) {
            for ($i = 0; $i < 15; $i++) {
                $title = $faker->sentence(rand(4, 15));

                $post = [
                    'uri' => str_slug($title).uniqid('-', true),
                    'user_id' => 1,
                    'thumbnail' => 'https://picsum.photos/200/300/?random',
                    'title' => $title,
                    'body' => $faker->paragraphs(rand(8, 22), true),
                    'small_abstract' => $faker->sentence(8),
                    'medium_abstract' => $faker->sentence(18)
                ];

                $category->posts()->create($post);
            }
        }

        foreach (Post::all() as $post) {
            for ($i = 0; $i < rand(3, 15); $i++) {
                factory(App\Comment::class)->create([
                    'post_id' => $post->id,
                ]);
            }
        }
    }
}
