<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $table = 'authors';
    protected $primarayKey = 'id';
    public $incrementing = true;    
    public $timestamps = true;

    public function book(){
        return $this ->hasMany('App\Models\Book');

    }
}
