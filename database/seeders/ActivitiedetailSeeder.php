<?php

namespace Database\Seeders;

use App\Models\activitiesdetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActivitiedetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        activitiesdetail::factory(10)->create();
    }
}
