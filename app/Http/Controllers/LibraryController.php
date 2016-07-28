<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Library as Library;

class LibraryController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('library.home');
    }

    public function listBook()
    {
        $listBook = Library::all();
//        return view('library/listBook');
        var_dump($listBook);
    }

    public function createBookView()
    {
        return view('library.createBookView');
    }

    public function createBook(Request $request)
    {
        Library::create([
            'book_id' => $request->input('book_id'),
            'book_name' => $request->input('book_name'),
            'author_name' => $request->input('author_name'),
            'created_by' => $request->input('created_by')
        ]);

        return redirect()->action('LibraryController@index');
    }
}
