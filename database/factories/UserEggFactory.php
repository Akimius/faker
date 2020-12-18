<?php

namespace Database\Factories;

use App\UserEgg;
use Illuminate\Database\Eloquent\Factories\Factory;
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
                'login'            => $this->faker->name,
                'email'            => $this->faker->email,
                'password'         => $this->faker->password,
                'firstname'        => $this->faker->firstName,
                'lastname'         => $this->faker->lastName,
                'cellPhone'        => $this->faker->phoneNumber,
                'skype'            => $this->faker->name,
                'activationKey'    => '_2y_13_5/UUMWZT9kghzDVsG_DIgehkqZrrFNmu5lZOQzlywiuXyQ4xTEgJu',
                'status'           => $this->faker->randomElement([1]),
                'groupId'          => $this->faker->randomElement([2, 39, 40, 3, 10, 4, 11, 5, 1, 9, 12, 16, 17, 18, 13, 24, 34, 21, 22]),
                'browserIp'        => $this->faker->ipv4,
                'browserUserAgent' => 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:72.0) Gecko/20100101 Firefox/72.0',
                'lastAccess'       => now(),

            ];
    }
}
