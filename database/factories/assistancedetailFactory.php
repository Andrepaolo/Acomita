<?php

namespace Database\Factories;

use App\Models\assistance;
use App\Models\stand;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\assistancedetail>
 */
class assistancedetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name=$this->faker->randomElement(['presente', 'tarde', 'falto']);
        return[
            'status'=>$name,

            'stand_id'=>stand::all()->random()->id,
            'assistance_id'=>assistance::all()->random()->id,
        ];
    }
}
