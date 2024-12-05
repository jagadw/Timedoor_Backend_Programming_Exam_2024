<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Books;
class BookController extends Controller
{
    //
    public function books()
    {
        // $books = Books::all();
        // return view('books',['books' => $books]);
        // $books = Books::with('author')->get();
        // return view('books', compact('books'));

        // $books = Books::withCount('ratings')->get();
        // return view('books', ['books' => $books]);

        $books = Books::with('author')->withCount('ratings')->get();
        return view('books', compact('books'));
    }
}
