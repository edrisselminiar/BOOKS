<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class AdminBooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.books', [
            'books' => Book::latest()->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.bookcreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'img' => 'required',
            'pdf' => 'required',

        ]);
        
        $image = $request->file('img');
        $new_name = rand().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('books/img'), $new_name);

        $pdf = $request->file('pdf');
        $new_name1 = rand().'.'.$pdf->getClientOriginalExtension();
        $pdf->move(public_path('books/pdf'), $new_name1);

        $form_data = array(
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'img' => $new_name,
            'pdf' => $new_name1,
        );
        Book::create($form_data);
        return redirect()->route('books.index')->withSuccess('Done');

    }
    



    /**
     * Display the specified resource.
     */
    public function show(book $book)
    {
        return view('admin.showbook',compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(book $book)
    {
        return view('admin.updatebook',compact('book'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       
        $book = Book::find($id);

        // Delete the old image file
        unlink(public_path('books/img/' . $book->img));

        // Delete the old pdf file
        unlink(public_path('books/pdf/' . $book->pdf));

        $book->delete();

        


        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'pdf' => 'nullable|file|mimes:pdf|max:10240',

        ]);
       


        

        
        $image = $request->file('img');
        $new_name = rand().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('books/img'), $new_name);

        $pdf = $request->file('pdf');
        $new_name1 = rand().'.'.$pdf->getClientOriginalExtension();
        $pdf->move(public_path('books/pdf'), $new_name1);

        $form_data = array(
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'img' => $new_name,
            'pdf' => $new_name1,
        );
        Book::create($form_data);
        return redirect()->route('books.index')->withSuccess('Done');
        
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(book $book)
    {
        // $book = Book::find($id);

        // Delete the old image file
        // unlink(public_path('books/img/' . $book->img));

        // Delete the old pdf file
        
        // $image_name = $book->img;
        // $pdf_name = $book->pdf;
        
        unlink(public_path('books/img/' . $book->img));
        unlink(public_path('books/pdf/' . $book->pdf));

     




        $book->delete();
  
        return redirect()->route('books.index')->with('success','Post Deleted Successfully');
    }

    public function getDownload($id)
    {
        
        $book = Book::findOrFail($id);
        $filePath = public_path('books/pdf/' . $book->pdf);
        return response()->download($filePath, $book->pdf);

    }

    public function search(Request $request)
    {
        $search = $request->input('search'); // get the search term from the request
        $books = Book::where('title', 'like', '%'.$search.'%')->get(); // get the posts that match the search term
        return view('admin.search', ['books' => $books]); // return the view with the posts
    }



}
