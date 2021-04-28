<?php

namespace Database\Factories;

use App\MailingContact;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MailingContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MailingContact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return
            [
                'email' => $this->faker->email,
                'phone' => '1'
                    . random_int(2, 9)
                    . random_int(0, 9)
                    . random_int(0, 9)// NPA
                    . random_int(2, 9)
                    . random_int(0, 9)
                    . random_int(0, 9)
                    . random_int(0, 9) // 1
                    . random_int(0, 9) // 2
                    . random_int(0, 9) // 3
                    . random_int(0, 9), // 4
//                'phone' => (string)Str::of($this->faker->phoneNumber)
//                    ->ltrim('+')
//                    ->replace('.', '')
//                    ->replace('x', '')
//                    ->replace('-', ''),
                'fname'     => $this->faker->firstName,
                'lname'     => $this->faker->lastName,
                'country'   => $this->faker->randomElement(['USA', 'UK']),
                'city'      => $this->faker->country, // )))
                'address'   => (string)Str::of($this->faker->address)->replace(';', ''),
                'state'     => $this->faker->state,
                'zip'       => $this->faker->postcode,
                'gender'    => -1,
                'dob'       => $this->faker->date(),
            ];
    }
}
