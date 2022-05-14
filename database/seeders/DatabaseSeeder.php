<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(AssociateSeeder::class);
        $this->call(SonSeeder::class);
        $this->call(SpouseSeeder::class);
        $this->call(StandSeeder::class);
        $this->call(ActivitieSeeder::class);
        $this->call(InchargeSeeder::class);
        $this->call(ActivitiedetailSeeder::class);
        $this->call(AssistanceSeeder::class);
        $this->call(AssistancedetailSeeder::class);



    }
}
