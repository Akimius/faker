<?php

namespace Database\Factories;

use App\Enums\UsaState;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class CallStatByInstanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $instanceIds = DB::table('instance')->pluck('id')->toArray();
            //->where();

        return
            [
                'instanceId'         => $this->faker->randomElement($instanceIds),
                'direction'          => $this->faker->randomElement([1]),
                'month'              => Carbon::today()->subDays(random_int(0, 2000)),
                'state'              => $this->faker->randomElement(UsaState::getCodes()),
                'callCount'          => $this->faker->randomElement([1, 10]),
                'connectedCallCount' => $this->faker->randomElement([1, 10]),
                'billedSeconds'      => $this->faker->randomElement([1, 300]),
                'phonexaExpenses'    => 0,
                'phoneGroupType'     => $this->faker->randomElement([1, 2]),
                'updatedAt'          => now(),
            ];
    }
}
