<?php

namespace Database\Factories;

use App\Models\Area;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Investigation>
 */
class InvestigationFactory extends Factory
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
            'start_date'=>$this->faker->date(),
            'end_date'=>$this->faker->date(),
            'path'=>$this->faker->text(20),
            'area_id'=>Area::all()->random()->id,
            'category_id'=>Category::all()->random()->id,
            'qualification'=>$this->faker->text(),

        ];
    }
}
