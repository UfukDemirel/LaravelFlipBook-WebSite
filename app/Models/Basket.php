<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Basket extends Model
{
    public $table = 'basket';

    public function getCart(){
        return DB::select("SELECT * FROM books b INNER JOIN
                                cart c on b.id = c.book_id
                                WHERE b.id = c.book_id AND c.user_id = ?",[Auth::user()->id]);

    }
}
