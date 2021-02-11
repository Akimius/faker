<?php

use Database\Seeders\LeadOverbidBlackListSeeder;
use Database\Seeders\LeadOverbidSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        // $this->call(UserSeeder::class);
        $this->call(LeadOverbidSeeder::class);
        $this->call(LeadOverbidBlackListSeeder::class);
    }
}
