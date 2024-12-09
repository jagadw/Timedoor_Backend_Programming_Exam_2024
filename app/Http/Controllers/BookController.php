<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Books;
class BookController extends Controller
{
    //
    public function books(Request $request)
    {
        $search = $request->search;
        $num_rows = 10;
    
        if (strlen($search)) {
            $books = Books::where('title', 'like', "%{$search}%")
                ->with('author', 'category')
                ->withCount('ratings')
                ->paginate($num_rows);
        } else {
            $books = Books::with('author', 'category')
                ->withCount('ratings')
                ->orderBy('id', 'desc')
                ->paginate($num_rows);
        }
    
        return view('books', compact('books'));
    }
        // $books = Books::all();
        // return view('books',['books' => $books]);
        // $books = Books::with('author')->get();
        // return view('books', compact('books'));

        // $books = Books::withCount('ratings')->get();
        // return view('books', ['books' => $books]);
}