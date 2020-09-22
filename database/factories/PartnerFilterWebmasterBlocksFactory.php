<?php

namespace Database\Factories;

use App\PartnerFilterWebmasterBlocks;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PartnerFilterWebmasterBlocksFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PartnerFilterWebmasterBlocks::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'campaignId'      => 203,
            'webmasterId'     => 1036, // 1055
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
