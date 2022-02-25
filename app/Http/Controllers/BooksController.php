<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BooksController extends Controller
{
    public function index() {
        $books = Book::all();
        return view('library', compact('books'));
    }

    public function manage() {
        $books = Book::all();
        return view('books/manage', compact('books'));
    }

    public function add() {
        return view('books/add');
    }

    public function submit(Request $request) {
        
        $request->validate([
            'title' => 'required|string|min:5|max:20',
            'writer' => 'required|string|min:5|max:20',
            'pages' => 'required|integer|min:1',
            'year' => 'required|integer|min:2000|max:2021',
        ]);

        Book::create([
            'title' => $request->title,
            'writer' => $request->writer,
            'pages' => $request->pages,
            'year' => $request->year,
        ]);

        return redirect('/library/manage')->with('status_success', 'Book has been added to the archive!');
    }

    public function edit($id) {
        $book = Book::findOrFail($id);
        return view('books/edit', compact('book'));
    }

    public function update(Request $request, $id) {

        $request->validate([
            'title' => 'required|string|min:5|max:20',
            'writer' => 'required|string|min:5|max:20',
            'pages' => 'required|integer|min:1',
            'year' => 'required|integer|min:2000|max:2021',
        ]);

        $book = Book::findOrFail($id);
        $book->update([
            'title' => $request->title,
            'writer' => $request->writer,
            'pages' => $request->pages,
            'year' => $request->year,
        ]);

        return redirect('/library/manage')->with('status_success', 'Archive has been updated!');
    }

    public function delete($id) {
        $book = Book::findOrFail($id);
        $book->delete();
        return redirect('/library/manage')->with('status_success', 'Book has been removed from the archive!');
    }
}
