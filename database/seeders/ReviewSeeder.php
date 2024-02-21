<?php

namespace Database\Seeders;
use App\Models\Review;
use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::all()->each(function ($book) {
            Review::factory(10)->create(['book_id' => $book->id]);
        });
    }
}
