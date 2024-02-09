<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Book;
use PDF;


class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('book', [
            'books' => Book::latest()->paginate(12)
        ]);

    }

    public function getDownload($id)
    {
        $book = Book::findOrFail($id);
        $filePath = public_path('books/pdf/' . $book->pdf);
        return response()->download($filePath, $book->pdf);

    }



    /**
     * Show the form for creating a new resource.
     */
    public function readonline($id)
    {
        $book = Book::findOrFail($id);
        return view('pdfbook', compact('book'));
      
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "hello";
    }

    public function search(Request $request)
    {
        return "hello";
    }

    /**
     * Display the specified resource.
     */
    public function show(book $book)
    {
        $book = Book::find($book->id);
        // $reviews = $book->reviews()->paginate(4);
        // $reviews = $book->reviews()->get();
        $reviews = $book->reviews()->orderByDesc('user_id', auth()->id())->paginate(4);

        $averageRating = $book->averageRating();
        // $reviews = $reviews->sortByDesc(function ($review, $key) {
        //     return $review->user_id == auth()->id() ? 1 : 0;
        // })->paginate(4);
        // $book = Book::with('reviews')->find($book->id);
        // $book = Book::with(['reviews' => function ($query) {
        //     $query->paginate(4);
        // }])->find($book->id);
        // $book = Book::find($book->id);
        // $reviews = $book->reviews()->paginate(4);

        // $averageRating = $book->averageRating();
        // 
        return view('showbook',compact('book' , 'averageRating', 'reviews'));

    }


    
    // public function search()
    // {
    //     return "hello";
    //     $search = $request->input('search'); // get the search term from the request
    //     $books = Book::where('title', 'like', '%'.$search.'%')->get(); // get the posts that match the search term
    //     return view('search', ['books' => $books]); // return the view with the posts
    // }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}
