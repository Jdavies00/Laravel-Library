<?php

namespace App;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    protected $table = 'genre';
    protected $primarayKey = 'id';
    public $incrementing = true;    
    public $timestamps = true;

}
