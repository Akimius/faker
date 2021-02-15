<?php

namespace Database\Factories;

use App\LeadOverbid;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

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
     * @throws \Exception
     */
    public function definition(): array
    {

        return [
            'creationDatetime' => now(),
            'leadId'            => $this->faker->randomElement($this->getLeadIds()),
            'partnerId'         => $this->faker->randomElement($this->getPartnerIds()),
            'campaignId'        => $this->faker->randomElement($this->getCampaignIds()),
            'oldBid'            => random_int(10, 20),
            'newBid'            => random_int(20, 30),
            'overBid'           => random_int(1, 2),
            'status'            => $this->faker->randomElement([0, 1, 2]),
            'overBidPartnerId'  => $this->faker->randomElement($this->getPartnerIds()),
            'overBidCampaignId' => $this->faker->randomElement($this->getCampaignIds())
        ];
    }

    private function getPartnerIds(): array
    {
        return DB::table('partner')
            ->take(10)
            ->pluck('id')
            ->toArray();
    }

    private function getCampaignIds(): array
    {
        return DB::table('partner_campaign')
            ->take(10)
            ->pluck('id')
            ->toArray();
    }

    private function getLeadIds(): array
    {
        return DB::table('lead_body_paydayus')
            //->where('name', 'John')
            ->take(5)
            ->pluck('id')
            ->toArray();
    }
}
