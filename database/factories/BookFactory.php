<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;


class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'title'=>$this->faker->words($nd=2,$variableNbWords = true),
            'excerpt'=>$this->faker->catchPhrase(),
            'isbn'=>$this->faker->isbn13,
            'pages'=>$this->faker->numberBetween($min = 0, $max = 9000),
            'cost'=>$this->faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 100),
            'value'=>$this->faker->randomDigitNotNull,
            'released'=>$this->faker->dateTime(),
            'status'=>$this->faker->randomDigitNotNull

        ];

        }
    }