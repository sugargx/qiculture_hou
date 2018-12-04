<?php

use Faker\Generator as Faker;

$factory->define(\App\Http\Model\Link::class, function (Faker $faker) {
    return [
        //
        'name'=>$faker->text(5),
        'url'=>$faker->url
    ];
});
