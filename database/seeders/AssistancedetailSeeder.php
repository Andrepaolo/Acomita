<?php

namespace Database\Seeders;

use App\Models\assistancedetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AssistancedetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        assistancedetail::factory(10)->create();
    }
}
