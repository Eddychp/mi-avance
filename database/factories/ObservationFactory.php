<?php

namespace Database\Factories;

use App\Models\contestant;
use App\Models\Investigation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Observation>
 */
class ObservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'investigation_id'=>Investigation::all()->random()->id,
            'contestant_id'=>contestant::all()->random()->id,
        ];
    }
}
