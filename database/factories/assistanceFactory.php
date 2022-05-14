<?php

namespace Database\Factories;

use App\Models\activitie;
use App\Models\incharge;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\assistance>
 */
class assistanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name=$this->faker->unique()->name();
        return[
            'name'=>$name,
            'datetime'=>$this->faker->unique()->dateTime(),
            'incharge_id'=>incharge::all()->random()->id,
            'activitie_id'=>activitie::all()->random()->id,
        ];
    }
}
