<?php

use Faker\Generator as Faker;

$factory->define(\App\Http\Model\IndexColumn::class, function (Faker $faker) {
    return [
        //
        'news_type_id'=>1,
        'name'=>'研究动态'
    ];
});
