<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    //
    use HasFactory;
    protected $table = 'checkout';
    protected $primarayKey = 'id';
    public $incrementing = true;
    public $timestamps = true;

    public function book()
    {
        return $this->belongsTo('App\Models\Book', 'ref_book_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'ref_user_id');
    }

    // // 'ref_bookStatus_id' => BookStatus::all()->random()->id,
    // Public function book_status(){
    //     return $this->belongsTo('App\Modles\BookStatus','ref_bookstatus_id');
    // }

    // //  'ref_book_condition' => Condition::all()->random()->id,
    // public function condition()
    // {
    //     return $this->belongsTo('App\Models\Condition', 'ref_book_condition');
    // }
}
