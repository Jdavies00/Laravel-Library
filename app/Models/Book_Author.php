<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Book_Author extends Model
{
    use HasFactory;
    protected $table = 'books_authors';
    protected $primarayKey = 'id';
    public $incrementing = true;    
    public $timestamps = true;

}
