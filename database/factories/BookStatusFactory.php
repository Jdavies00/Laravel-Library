<?php

namespace Database\Factories;

use App\Models\BookStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookStatusFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BookStatus::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 1=in 0=out faker with sqrt makeing chances to being closer to 1
            'in/out' => $this->faker->biasedNumberBetween($min = 0, $max = 1, $function = 'sqrt'),

        ];
    }
}
