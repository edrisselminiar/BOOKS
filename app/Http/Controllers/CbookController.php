<?php

namespace App\Http\Controllers;
use App\Models\Book;

use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class CbookController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->input('search');  
        $book = Book::where('title', 'like', '%'.$search.'%')->where('id', '!=', 71)->paginate(12); 
        return view('search', ['books' => $book]); 
    }

    public function index()
    {
        return view('welcome');
    }




    public function setLocale($locale)
    {
        if (! in_array($locale, ['en', 'ar', 'fr'])) {
            abort(400);
        }

        Session::put('locale', $locale);

        return redirect()->back();
        // App::setLocale($locale);
        // Session()->put('locale', $locale);
  
        // return redirect()->back();
    }
}
