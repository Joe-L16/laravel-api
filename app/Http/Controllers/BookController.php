<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        // Mengambil semua buku beserta penulisnya
        $books = Book::with('author')->get();

        // Mengembalikan data dalam format JSON
        return response()->json($books);
    }
}
