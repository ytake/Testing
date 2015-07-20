<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(\App\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => str_random(10),
        'remember_token' => str_random(10),
    ];
});

$factory->defineAs(\App\User::class, 'guest', function ($faker) {
    return [
        'name' => 'guest',
        'email' => null,
        'password' => str_random(10),
        'remember_token' => str_random(10),
    ];
});


$factory->define(\App\Entry::class, function ($faker) {
    $faker = Faker\Factory::create('ja_JP');
    return [
        'title' => $faker->word,
        'content' => $faker->text,
    ];
});