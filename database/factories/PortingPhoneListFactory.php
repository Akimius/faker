<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PortingPhoneList;
use Faker\Generator as Faker;

$factory->define(PortingPhoneList::class, static function (Faker $faker) {
    return [
        'name' => $faker->word,
        'status' => $faker->randomElement([0, 1, 2]),
        'portingType' => $faker->randomElement([1, 2, 3]),
        'userId' => 1107,
        'updatedAt' => now(),
        'createdAt' => now(),
    ];
});
