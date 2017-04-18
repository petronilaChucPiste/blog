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

$factory->define(App\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
    ];
});

/**
 * Factory definition for model App\Client.
 */
$factory->define(App\Client::class, function ($faker) {
    return [
        'phone' => $faker->fillable,
    ];
});

/**
 * Factory definition for model App\Director.
 */
$factory->define(App\Director::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Genre.
 */
$factory->define(App\Genre::class, function ($faker) {
    return [
        'name' => $faker->fillable,
        'description' => $faker->fillable,
    ];
});

/**
 * Factory definition for model App\Movie.
 */
$factory->define(App\Movie::class, function ($faker) {
    return [
        'director_id' => $faker->key,
        'genre_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Rent.
 */
$factory->define(App\Rent::class, function ($faker) {
    return [
        'movie_id' => $faker->key,
        'client_id' => $faker->key,
    ];
});
