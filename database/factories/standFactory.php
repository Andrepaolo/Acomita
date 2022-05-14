<?php

namespace Database\Factories;

use App\Models\associate;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\stand>
 */
class standFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name=$this->faker->unique()->sentence();
        return [
            'name'=>$name,
            'status'=>$this->faker->randomElement(['alquilado', 'empadronado', 'problemas']),

            'associate_id'=>associate::all()->random()->id,
        ];
    }
}
