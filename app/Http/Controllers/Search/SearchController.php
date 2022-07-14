<?php

namespace App\Http\Controllers\Search;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function searchmember(Request $request){
        $user = DB::table('users')->where('permission_level','=','user')->get();
        $search = $request->get('search');
        $posts= DB::table('users')
            ->Where('name','like',$search.'%')
            ->orWhere('surname','like',$search.'%')->get();
        return view('search.searchmember',compact('posts','user'));
    }

    public function searchcontact(Request $request){
        $search = $request->get('search');
        $post= DB::table('contact')
            ->where('name','like',$search.'%')
            ->orWhere('surname','like',$search.'%')->get();
        return view('search.searchcontact',compact('post'));
    }

    public function searchbooks(Request $request){
        $search = $request->get('search');
        $books= DB::table('books')
            ->where('book_name','like',$search.'%')
            ->orWhere('book_slug','like',$search.'%')->get();
        return view('search.searchbooks',compact('books'));
    }
}
