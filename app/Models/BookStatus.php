<?php

namespace App;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class BookStatus extends Model
{
    use HasFactory;
    protected $table = 'book_status';
    protected $primarayKey = 'id';
    public $incrementing = true;    
    public $timestamps = true;

}
