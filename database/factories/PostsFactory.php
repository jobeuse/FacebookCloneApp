<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Posts;
use Faker\Generator as Faker;

$factory->define(Posts::class, function (Faker $faker) {
    return [
        'user_id'=>factory(App\User::class),
        'body'=>$faker->Paragraph(),
        'cat'=>'normal',
        'image'=>$faker->image('public/images',640,480, null, false),
        'caption'=>$faker->sentence(),

    ];
});
