<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $book = Book::all();
        return view('books.index', compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'author' => 'required|string',
            'yearPublished' => 'required'
        ]);
        Book::create($request->all());
        return redirect()->route('books.index')->with('success', 'Book Created SuccessFully.');

        // return view('books.create');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required|string',
            'author' => 'required|string',
            'yearPublished' => 'required'
        ]);
        $book->update($request->all());
        return redirect()->route('books.index')->with('success', 'Book Updated SuccessFully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        // $book = Book::find($id);
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Book Deleted SuccessFully.');
    }
}
