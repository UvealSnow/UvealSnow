<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class)->create(
            [
                'name' => 'Kevin Avila',
                'email' => 'kevhah92@gmail.com',
                'password' => bcrypt('48kgeia8!')
            ]
        );

        $this->call(CategoriesTableSeeder::class);
        $this->call(PostsTableSeeder::class);
    }
}
