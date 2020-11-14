<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    protected $table = 'genre';
    protected $primarayKey = 'id';
    public $incrementing = true;    
    public $timestamps = false;// for gods sake unless there is atime stapm make this false

}
