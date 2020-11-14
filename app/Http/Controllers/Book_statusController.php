<?php

namespace App\Http\Controllers;
use App\Models\BookStatus;
use Illuminate\Http\Request;


class Book_statusController extends Controller
{
    //render a list of all books
    public function index(){
        $book_status = BookStatus::all();
        return $book_status ->toArray();
    }

    
    // public function show($id)
    // {
       
    // }
//     public function create(Request $request)
//     {
//       

       
//     } 

//     public function store(){

//     }
    
//     public function edit(){

//     }
//     public function update(){

//     }
    
//     public function delete(){

//     }
    
// }

}