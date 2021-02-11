<?php

namespace Database\Seeders;

use App\LeadOverbid;
use Illuminate\Database\Seeder;

class LeadOverbidSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        LeadOverbid::factory()
            ->count(10)
            ->create();
    }
}
