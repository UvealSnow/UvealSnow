<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    static $post_id;

    return [
        'post_id' => $post_id,
        'name' => $faker->firstName() . ' ' . $faker->lastName,
        'email' => $faker->safeEmail,
        'body' => $faker->paragraphs(rand(1, 3), true)
    ];
});
