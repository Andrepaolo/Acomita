<?php

namespace Database\Factories;

use App\Models\associate;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\spouse>
 */
class spouseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name=$this->faker->unique()->name();
        return [
            'fullname'=>$name,
            'cellphone'=>$this->faker->phoneNumber(),
            'email'=>$this->faker->safeEmail(),
            'dni'=>$this->faker->numerify('########'),
            'age'=>$this->faker->numberBetween(0,70),
            'associate_id'=>associate::all()->random()->id,
        ];
    }
}
