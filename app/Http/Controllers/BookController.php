<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;


class BookController extends Controller
{
    //render a list of books
    public function index(){
        $books = Book::all();
        return $books ->toArray();
    }

    //show a single book
    public function show($id)
    {
        $book = Book::find($id);
        return view('book.show',['book' => $book ]);
    }
    public function create(Request $request)
    {
        $book = new Book;
        $input= $request -> all ();
        $book -> title = $input ['title'];
        $book -> save ();
        // $books = App\Models\Book::all();
        // foreach ( $books as $book){
        //     echo $book->author->name;
        
    } 

    public function store (){

    }
    
    public function editBook(){

    }
    public function updateBook(){

    }
    
    public function delete(){

    }
    
}

