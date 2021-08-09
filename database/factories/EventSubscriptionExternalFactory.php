<?php

namespace Database\Factories;

use App\EventSubscriptionExternal;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventSubscriptionExternalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EventSubscriptionExternal::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'eventId'            => $this->faker->randomElement([8]),
            'eventTarget'        => null,
            'eventSubTarget'     => null,
            'recipientTypeId'    => $this->faker->randomElement([1, 2, 3]),
            'recipientChannelId' => $this->faker->randomElement([1, 2, 3, 4, 5, 6]),
            'recipientValue'     => $this->faker->companyEmail,
            'isHidden'           => false,
        ];
    }
}
