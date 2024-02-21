<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Support\Facades\Mail;
use App\Mail\suggest;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;

class homecontroller extends Controller
{
    public function index(book $book)
    {

        $books = Book::where('id', '!=', 71)->inRandomOrder()->take(12)->get();
        $random_book = Book::inRandomOrder()->first();

        return view('/welcome', compact('books' , 'random_book'));
    }

    public function suggest(Request $request){

        Mail::to('simoelminiar@gmail.com')->send(new suggest($request));


        return redirect('/');
    }
}





// $book = Book::find($book->id);
// $reviews = $book->reviews()->orderByDesc('user_id', auth()->id())->paginate(4);

// $averageRating = $book->averageRating();

// return view('showbook',compact('book' , 'averageRating', 'reviews'));