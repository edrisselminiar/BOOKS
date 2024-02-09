<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function __construct(){
        $this->middleware("auth");
    }



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

        public function destroy(Review $review)
    {
        // Check if the authenticated user is the author of the review
        // if (auth()->id() !== $review->user_id) {
        //     return redirect()->back()->with('error', 'You are not authorized to delete this review.');
        // }

        // return "hello";
        $review->delete();

        return redirect()->back()->with('success', 'Review deleted successfully.');
    }
    public function update(Request $request, Review $review)
    {
       

            if (auth()->id() !== $review->user_id) {
                return redirect()->back()->with('error', 'You are not authorized to edit this review.');
            }

            $validatedData = $request->validate([
                'review' => 'required',
                'rating' => 'required|integer|min:1|max:5',
            ]);

            $review->update($validatedData);
 
            return redirect()->back();
            // return redirect()->route('reviews.show', $review)->with('success', 'Review updated successfully.');
    }

    // public function edit(Review $review)
    // {
    //     // return "hello";
    //         return redirect()->back();
       

    //     // return view('editReview', compact('review'));
    // }

}
