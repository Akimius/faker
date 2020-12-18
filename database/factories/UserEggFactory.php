<?php

namespace Database\Factories;

use App\UserEgg;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserEggFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserEgg::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return
            [
                'createdAt'        => now(),
                'login'            => $this->faker->userName,
                'email'            => $this->faker->email,
                'password'         => Hash::make('123456Qwerty!'),
                'firstname'        => $this->faker->firstName,
                'lastname'         => $this->faker->lastName,
                'cellPhone'        => $this->faker->phoneNumber,
                'skype'            => $this->faker->userName,
                'activationKey'    => Str::random(60),
                'status'           => $this->faker->randomElement([1]),
                'groupId'          => $this->faker->randomElement([2, 39, 40, 3, 10, 4, 11, 5, 1, 9, 12, 16, 17, 18, 13, 24, 34, 21, 22]),
                'browserIp'        => $this->faker->ipv4,
                'browserUserAgent' => $this->faker->userAgent,
                'lastAccess'       => now(),
            ];
    }
}
