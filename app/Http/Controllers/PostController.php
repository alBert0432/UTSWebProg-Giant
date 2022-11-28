<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\books;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    function searchbook($id)
    {
        $book = DB::table('books')
            ->where('book_id', '=', $id)
            ->get();
        return view("bookdetail", ["row" => $book[0]]);
    }

    function searchpublisher($id)
    {
        $books = DB::table('books')
            ->join('publishers', 'books.pub_id_book', '=', 'publishers.pub_id')
            ->where('publishers.pub_id', '=', $id)
            ->get();
        return view("publishersdetail", ["row" => $books]);
        // dd($books);
    }

    function searchcategory($id)
    {
        $categories = DB::table('book_category')
            ->join('categories', 'book_category.cat_id', '=', 'categories.cat_id')
            ->join('books', 'book_category.book_id', '=', 'books.book_id')
            ->where('book_category.cat_id', '=', $id)
            ->get();
        return view("categorybook", ["row" => $categories]);
    }
}
