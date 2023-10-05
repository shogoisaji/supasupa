<?php

namespace App\Http\Controllers;

use App\Services\GoogleBooksClient;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function search(Request $request)
    {
        $client = new GoogleBooksClient();
        if ($request->has('keyword'))  {
            $keyword = $request->input('keyword');
            $books = $client->searchBooks($keyword);
        } else {
            $books = $client->searchBooks('books');
        }
        return view('books.search', ['books' => $books]);
    }
}