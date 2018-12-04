<?php

use Faker\Generator as Faker;

$factory->define(\App\Http\Model\News::class, function (Faker $faker) {
    return [
        'type_id'=>$faker->randomElement([1,2,3,4,5,6,7,8,9,10]),
        'title'=>$faker->text(20),
        'content'=>$faker->text(300),
        'author'=>$faker->name,
        'page_view'=>$faker->randomDigit
    ];
});
