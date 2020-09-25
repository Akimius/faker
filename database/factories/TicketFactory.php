<?php

namespace Database\Factories;

use App\Ticket;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TicketFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ticket::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return
            [
                'status'    => $this->faker->randomElement([0, 1, 10]),
                'userId'    => 1107, // Akim
                'projectId' => 0,
                'groupId'   => 1, // Dev
                'subject'   => $this->faker->sentence,
                'messages'  => $this->faker->randomElement([0, 1, 2, 3, 4]),
                'assignId' => 1107
            ];
    }
}
