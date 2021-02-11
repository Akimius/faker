<?php

namespace Database\Seeders;

use App\LeadOverbidBlackList;
use Illuminate\Database\Seeder;

class LeadOverbidBlackListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        LeadOverbidBlackList::factory()
            ->count(10)
            ->create();
    }
}
