<?php

namespace Database\Seeders;

use BookStatus;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            UserSeeder::class,
            AuthorSeeder::class,
            BookSeeder::class,
            Book_AuthorSeeder::class,
            GenreSeeder::class,
            ConditionSeeder::class,
            BookStatusSeeder::class,
            CheckoutSeeder::class,
            
        ]);
    }
}
