<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request, Book $book)
    {
        $review = new Review;
        $review->user_id = auth()->id();
        $review->book_id = $book->id;
        $review->review = $request->input('review');
        $review->rating = $request->input('rating');
        $review->save();

        return redirect()->back();
    }

}
