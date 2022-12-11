<?php

namespace Database\Factories;

use App\Models\Investigation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Result>
 */
class ResultFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'date'=>$this->faker->date(),
            'description'=>$this->faker->text(),
            'ranking'=>$this->faker->randomNumber(),
            'qualification'=>$this->faker->randomNumber(),
            'investigation_id'=>Investigation::all()->random()->id,
        ];
    }
}
