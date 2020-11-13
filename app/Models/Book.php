<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Book extends Model
{
    use HasFactory;
    protected $table = 'books';
    protected $primarayKey = 'id';
    public $incrementing = true;    
    public $timestamps = true;
    
    
    
    //book can be checkedout many times/ owns refbookid, id?
    //many books to many status
    public function checkouts(){
        return $this ->hasMany('App\Models\Checkout','ref_book_id','id');
        
    }
    //many books to many genres
    public function genres(){
        return $this ->hasMany('App\Models\Genre');
    }
    
    //many books  to many authors
    public function authors (){
        return $this ->hasMany('App\Models\Authors');
    }
    
    //many books to one status
    public function status(){
        return $this ->hasOne('App\Models\bookStatus');
    }
    
    
    
}

//public function author(){
    //return $this ->belongsTo('App\Models\Author');
    
    //public function user(){
        //return $this ->belongsTo('App\Models\User');
        

