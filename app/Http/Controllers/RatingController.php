<?php

namespace App\Http\Controllers;

use App\Models\Ratings;
use App\Models\Authors; // Import model Authors
use App\Models\Books; // Import model Books
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function Rating() {
        // Mengambil data ratings beserta relasi author dan books
        $ratings = Ratings::with('author', 'books')
            ->orderBy('rating_id', 'desc')
            ->get();

        // Mengambil semua authors dan books
        $authors = Authors::all();
        $books = Books::all();

        return view('rating', compact('ratings', 'authors', 'books'));
    }
    
    public function insert (Request $request)
    {
        $request->validate([
            'author_id' => 'required|integer',
            'book_id' => 'required|integer',
            'qty' => 'required|integer',
    ]);

        Ratings::create($request->all());
        return redirect()->route('rating')->with('Success', 'Berhasil menambahkan.');
    }
}