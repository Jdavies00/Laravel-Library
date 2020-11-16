<?php

namespace Database\Factories;

use App\Models\Checkout;
use App\Models\User;
use App\Models\Book;
use App\Models\BookStatus;
use App\Models\Condition;
use Illuminate\Database\Eloquent\Factories\Factory;


class CheckoutFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Checkout::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ref_user_id' => User::all()->random()->id,
            'ref_book_id' => Book::all()->random()->id,
            'ref_bookstatus_id' => BookStatus::all()->random()->id,
            'condition_id' => Condition::all()->random()->id,
            'checkout_date' => $this->faker->dateTimeBetween($startDate = '-40 days', $endDate = 'now', $timezone = null),
            'return_date' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+40 days', $timezone = null),


        ];
    }
}
