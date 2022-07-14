<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
   public $table = 'category';

    public function getCategory(){
        return DB::table('category')->get();
    }

    public function getBooks($slug){
       return DB::table('books')
            ->join('category','category.id','=','books.category_id')
            ->where('category.slug','=',$slug)
            ->get();
    }
    public function Books(){
        return DB::table('books')->get();
    }

    public function getName($slug){
        return DB::table('books')
            ->select('category.name')
            ->join('category','category.id','=','books.category_id')
            ->where('category.slug','=',$slug)
            ->groupBy('category.name')
            ->get();
    }

    public function getRead($slug){
        return DB::table('category')
            ->join('books','books.category_id','=','category.id')
            ->where('books.book_slug','=',$slug)
            ->get();
    }

}
