<?php

namespace Database\Factories;


use App\Models\Book;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


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
            
            'title'=>$this->faker->text(),
            'excerpt'=>$this->faker->text(),
            'isbn'=>$this->faker->isbn13,
            'pages'=>$this->faker->randomDigitNotNull,
            'cost'=>$this->faker->randomDigitNotNull,
            'value'=>$this->faker->randomDigitNotNull,
            'released'=>$this->faker->dateTime(),
            'status'=>$this->faker->randomDigitNotNull

        ];

        }
    }