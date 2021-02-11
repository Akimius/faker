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
            'leadId'            => $this->faker->randomElement($this->getLeadIds()),
            'partnerId'         => 0,
            'campaignId'        => $this->faker->randomElement($this->getCampaignIds()),
            'oldBid'            => 123000,
            'newBid'            => 124000,
            'overBid'           => 1000,
            'status'            => $this->faker->randomElement([0, 1, 2]),
            'overBidPartnerId'  => 1,
            'overBidCampaignId' => 2
        ];
    }

    private function getCampaignIds(): array
    {
        return [
            1130630,
            1130631,
            1130632,
            1130633,
        ];
    }

    private function getLeadIds(): array
    {
        return [
            1130630,
            1130631,
            1130632,
            1130633,
            1130634,
            1130635,
            1130636,
            1130637,
            1130638,
            1130639,
            1130640,
            1130641,
            1130642,
            1130643,
            1130644,
            1131029,
        ];
    }
}
