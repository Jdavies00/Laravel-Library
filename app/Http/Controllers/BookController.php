<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;


class BookController extends Controller
{
    public function index()
    {
        return Book::all();
    }

    public function find($id)
    {
        if ($id->fails()) {
            return response(['message' => 'Somthing went wrong', 'status' => false]);
        }
        $book = Book::findOrFail($id);
        return $book;
    }

    public function create(Request $request)
    {
        if ($request->fails()) {
            return response(['message' => 'Somthing went wrong', 'status' => false]);
        }

        $book = new Book;
        $input = $request->all();
        $book->title = $input['title'];
        $book->author = $input['author'];
        $book->excerpt = $input['excerpt'];
        $book->isbn = $input['isbn'];
        // $book->genre = $input['genre'];
        $book->pages = $input['pages'];
        $book->cost = $input['cost'];
        $book->value = $input['value'];
        $book->released = $input['released'];
        $book->status = $input['status'];
        $book->save();
        return response(['data' => $book, 'message' => 'Book Successfully Created!', 'status' => true]);

    }

    public function update(Request $request, $id)
    {
       
        $book = Book::find($request->$id);
        if ($book == null) {
            return response(['message' => 'Something went wrong', 'status' => false]);
        }
        $input = $request->all();
        $book->title = $input['title'];
        $book->excerpt = $input['excerpt'];
        $book->isbn = $input['isbn'];
        // $book->genre = $input['genre'];
        $book->pages = $input['pages'];
        $book->cost = $input['cost'];
        $book->value = $input['value'];
        $book->released = $input['released'];
        $book->status = $input['status'];
        $book->save();
        $book->toArray();
        return response(['data' => $book, 'message' => 'Book updated successfully!', 'status' => true]);
 
    }

    public function delete($id)
    {
        {
        $book = Book::find($id);
        }
        
        if ($book == null) {
            return response(['message' => 'Something went wrong', 'status' => false]);
        }
        
        $book->delete();
        return response(['message' => 'Book was deleted', 'status' => false]);;
    }
}
