<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function index()
    {
        $author = Author::all();
        return $author ->toArray();
    }

    //show a single book
    public function show($id)
    {
        $author = Author::find($id);
        return view('author.show',['author' => $author]);
    }
    //
    public function create(Request $request)
    {
        $author = new Author;
        $input= $request -> all ();
        $author -> name = $input ['name'];
        $author -> save ();
    }
}
