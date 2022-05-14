<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\incharge>
 */
class inchargeFactory extends Factory
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
            'rol'=>$this->faker->randomElement(['socio', 'delegado', 'invitado']),

        ];
    }
}
