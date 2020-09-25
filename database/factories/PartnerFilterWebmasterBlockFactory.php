<?php

namespace Database\Factories;

use App\PartnerFilterWebmasterBlock;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PartnerFilterWebmasterBlockFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PartnerFilterWebmasterBlock::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'campaignId'      => 203,
            'webmasterId'     => $this->faker->randomElement([1036, 1055]),
            'channelId'       => null,
            'sourceId'        => null,
            'ssid'            => null,
            'createdAt'       => now(),
            'createdBy'       => 1107,
            'trafficMethod'   => null,
            'dateFrom'        => now(),
            'dateTo'           => now()->addDay(),
        ];
    }
}
