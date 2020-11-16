<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

use App\Models\Book_Author;

class Book_AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book_Author::factory()->count(100)->create();
    }
}
    
