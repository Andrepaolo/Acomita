<?php

namespace Database\Factories;

use App\Models\activitie;
use App\Models\incharge;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class activitiesdetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return[
            'collection'=>$this->faker->randomElement(['Necesaria','No necesaria']),
            'publication'=>$this->faker->randomElement(['1','0']),
            'type'=>$this->faker->randomElement(['obligatorio','voluntario']),
            'incharge_id'=>incharge::all()->random()->id,
            'activitie_id'=>activitie::all()->random()->id,
        ];
    }
}
