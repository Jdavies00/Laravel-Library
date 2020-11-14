<?php

namespace Database\Factories;

use App\Models\Book_Author;
use App\Models\Author;
use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class Book_AuthorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book_Author::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ref_author_id' => Author::all()->random()->id,
            'ref_book_id' => Book::all()->random()->id,

        ];
    }
}
    
    // 'email_verified_at' => now(),