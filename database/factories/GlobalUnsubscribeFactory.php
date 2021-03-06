<?php

/** @var Factory $factory */

use App\GlobalUnsubscribe;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(GlobalUnsubscribe::class, static function (Faker $faker) {

    \Carbon\Carbon::now()->endOfWeek();

    return [
        'productId'    => 1,
        'email'        => $faker->email,
        'phoneNumber'  => $faker->phoneNumber,
        'customField1' => 'customField1',
        'customField2' => 'customField2',
        'customField3' => 'customField3',
        'website'      => 'lendyou.com',
        'createdAt'    => now(),
        'status'       => $faker->randomElement([0, 1, 2, 10]),
        'comment'      => $faker->sentence,
        'unsubscribeCount' => 0,
        'source' => 0,


//        'portingType' => $faker->randomElement([1, 2, 3]),
//        'userId' => 1107,
//        'updatedAt' => now(),

    ];
});
