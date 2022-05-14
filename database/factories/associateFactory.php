<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\associate>
 */
class associateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name=$this->faker->unique()->firstName();
        return [
            'name'=>$name,
            'lastname'=>$this->faker->lastName(),
            'birthdate'=>$this->faker->date(),
            'dni'=>$this->faker->randomDigit(8),
            'cellphone'=>$this->faker->phoneNumber(),
            'degree'=>$this->faker->text(5),
            'email'=>$this->faker->safeEmail(),
            'civile_status'=>$this->faker->text(5),
            'address'=>$this->faker->address(),
            'user_id'=>User::all()->random()->id,

        ];
    }
}
