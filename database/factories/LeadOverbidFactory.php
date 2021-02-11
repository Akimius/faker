<?php

namespace Database\Factories;

use App\LeadOverbid;
use Illuminate\Database\Eloquent\Factories\Factory;

class LeadOverbidFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LeadOverbid::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'creationDatetime' => now(),
            'leadId'            => 123,
            'partnerId'         => 0,
            'campaignId'        => 1,
            'oldBid'            => 123000,
            'newBid'            => 124000,
            'overBid'           => 1000,
            'status'            => $this->faker->randomElement([0, 1, 2]),
            'overBidPartnerId'  => 1,
            'overBidCampaignId' => 2
        ];
    }
}
