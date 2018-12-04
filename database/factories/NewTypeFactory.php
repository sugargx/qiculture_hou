<?php

use Faker\Generator as Faker;

$factory->define(\App\Http\Model\NewType::class, function (Faker $faker) {
    return [
        'name' => $faker->text(10),
        'flag' => ''
    ];
});
