<?php

use Faker\Generator as Faker;
use \App\URL;
use Illuminate\Support\Str;

$factory->define(URL::class, function (Faker $faker) {
    return [
        'url' => $faker->url,
        'uuid' => Str::uuid(),
    ];
});
