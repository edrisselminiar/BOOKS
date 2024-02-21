<?php

namespace Database\Factories;

use App\Models\Review;
use App\Models\User;
use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Review::class;




    public function definition(): array
    {
        $reviews = ['Thanks','Thank you for your efforts', 'One of the best books I\'ve read', 'The best', 'Downloading was fast' , 'Thanks you ' , 'the best ','I have downloaded the best books','I will make sure to write two pages every day'];

        return [
            'user_id' => User::factory(),
            'book_id' => Book::factory(),
            'review' => $this->faker->randomElement($reviews),
            'rating' => $this->faker->numberBetween(3, 5),
        ];
    }
}
