<?php

namespace App;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
    use HasFactory;
    protected $table = 'condition';
    protected $primarayKey = 'id';
    public $incrementing = true;    
    public $timestamps = true;
}
