<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BooksController extends Controller
{
    public function createBook() {
        return view('createBook');
    }

    public function storeBook(Request $request) {
        $this->validate($request, [
            'bookTitle' => 'required|min:5|max:20',
            'author' => 'required|min:5|max:20',
            'pageCount' => 'required|numeric|min:0|not_in:0',
            'releaseYear'=>'required|numeric|min:2000|max:2021'
        ]);

        Book::create([
            'bookTitle' => $request->bookTitle,
            'author' => $request->author,
            'pageCount' => $request->pageCount,
            'releaseYear' => $request->releaseYear
        ]);

        return back()->with('success', 'Your form has been submitted. Fill the form below to submit another.');
    }

    public function showBook() {
        $books = Book::all();
        return view('welcome', compact('books'));
    }

    public function updateBookView() {
        $books = Book::all();
        return view('updateBook', compact('books'));
    }

    public function edit($id) {
        $book = Book::findOrFail($id);
        return view('edit', compact('book'));
    }

    public function update(Request $request, $id) {
        $this->validate($request, [
            'bookTitle' => 'required|min:5|max:20',
            'author' => 'required|min:5|max:20',
            'pageCount' => 'required|numeric|min:0|not_in:0',
            'releaseYear'=>'required|numeric|min:2000|max:2021'
        ]);

        $book = Book::find($id)->update($request->all());

        return back()->with('success', 'Data successfully updated!');
    }

    public function deleteForm() {
        return view('deleteBook');
    }

    public function delete(Request $request) {
        $this->validate($request, [
            'bookTitle' => 'required|min:5|max:20',
            'author' => 'required|min:5|max:20',
            'pageCount' => 'required|numeric|min:0|not_in:0',
            'releaseYear'=>'required|numeric|min:2000|max:2021'
        ]);

        $res = Book::where('bookTitle', $request->bookTitle)->where('author', $request->author)->where('pageCount', $request->pageCount)->where('releaseYear', $request->releaseYear)->delete();

        if ($res) {
            return back()->with('msg', 'Data successfully deleted!');
        }
        
        else {
            return back()->with('msg', 'No such book data found. Please recheck your data');
        }
    }
}
