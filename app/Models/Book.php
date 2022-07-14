<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Book extends Model
{
    protected $table = 'books';

    public function book(){
        return $this->select('*')->orderBy('id','desc')->get();
    }

    public function getBooks(string $slug) {
        return $this->where('book_slug',$slug)->first();
    }

    public function getRead($slug){
        return DB::table('category')
            ->join('books','books.category_id','=','category.id')
            ->where('books.book_slug','=',$slug)
            ->get();
    }

    public function getCart(){
        if (Auth::check()){
            return DB::select('SELECT * FROM books b INNER JOIN cart c
                                    on b.id = c.book_id
                                    WHERE b.id = c.book_id AND c.user_id = ?',[Auth::id()]);
        }
    }

    public function getSlug(string $slug){
        return $this->where('book_slug', $slug)->get(['book_emoji', 'book_name','id']);
    }

    public function ort($com){
        return DB::table('books')
            ->join('score','books.id','=','score.book_id')
            ->where('score.book_id', '=', $com->id)
            ->avg('rating');
    }
}
