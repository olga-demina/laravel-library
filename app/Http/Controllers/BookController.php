<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller {
    //
    public function index() {
        $books = Book::all();
        // $data = [
        //     'books' => $books
        // ];
        return view('books', compact('books'));
    }

    public function details() {
        $number = 1;
        $books = Book::where('author', '!=', 'Lev Tolstoj')
            ->orderBy('name', 'DESC') // Ordino in modo discendente
            ->limit($number)
            ->get();

        // $chosen_book = Book::where('id', 2)->first();
        $chosen_book = Book::findOrFail(20);
        dd($chosen_book);
        return view('details', compact('books'));
    }
}
