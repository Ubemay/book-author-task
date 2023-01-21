<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller {

    public function index() {
        $books = Book::with('author')->get();
        return view('books.index', compact('books'));
    }

    public function create() {
        $authors = Author::all();
        return view('books.create', compact('authors'));
    }

    public function store(Request $request)
    {
        $book = new Book();
        $book->name = $request->name;
        $book->author_id = $request->author_id;
        $book->description = $request->description;
        $book->page_count = $request->page_count;
        $book->save();
        return redirect('books')->with('success', 'Book created successfully');
    }


}
