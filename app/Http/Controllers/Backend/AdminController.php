<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    /* @var Book|Model
     */

    public $book;

    public function __construct(Book $book)
    {
        $this->book = $book;
    }

    public function dashboard(){
        $user = DB::table('users')->where('permission_level','=','user')->get();
        return view('Backend.dashboard',compact('user'));
    }

    public function profile(){
        $admin = DB::table('users')->where('permission_level','=','admin')->get();
        return view('Backend.profile',compact('admin'));
    }

    public function profilepost(Request $request){
        $request->validate([
            'name'=>'required',
            'surname'=>'required',
            'email'=>'required',
            'phone'=>'required',
        ]);

        $post = DB::table('users')
            ->where('id','=',Auth::id())
            ->update([
                "name"=>$request->name,
                "surname"=>$request->surname,
                "email"=>$request->email,
                "phone"=>$request->phone,
            ]);
        if ($post){
            Alert::success('Tebrikler!', 'Güncelleme Başarılı.');
            return back();
        }else{
            Alert::error('Hata!', 'Güncelleme Başarısız.');
            return back();
        }
    }

    public function iletisim(){
        $contact = DB::table('contact')->orderBy('id','desc')->get();
        return view('Backend.iletisim',compact('contact'));
    }

    public function bookadmin(){
        $books = $this->book->book();
        return view('Backend.bookadmin',compact('books'));
    }

    public function bookadminedit($id){
        $bookedit = DB::table('books')->where('id',$id)->get();
        return view('Backend.bookadminedit',compact('bookedit'));
    }

    public function bookadmineditpost(Request $request,$id){
        $request->validate([
            "book_slug"=>'required',
            "book_comment"=>'required',
            "book_name"=>'required',
            "book_writer"=>'required',
            "book_number"=>'required',
            "book_dimensions"=>'required',
            "book_publisher"=>'required',
            "book_paste"=>'required',
            "book_print"=>'required',
            "book_image"=>'required',
            "book_language"=>'required',
            "book_price"=>'required',
            "book_stock"=>'required',
            "book_emoji"=>'required',
            "book_flipbook"=>'required'
        ]);

        $edit = DB::table('books')
            ->where('id',$id)
            ->update([
                "book_slug"=>$request->book_slug,
                "book_comment"=>$request->book_comment,
                "book_name"=>$request->book_name,
                "book_writer"=>$request->book_writer,
                "book_number"=>$request->book_number,
                "book_dimensions"=>$request->book_dimensions,
                "book_publisher"=>$request->book_publisher,
                "book_paste"=>$request->book_paste,
                "book_print"=>$request->book_print,
                "book_image"=>$request->book_image,
                "book_language"=>$request->book_language,
                "book_price"=>$request->book_price,
                "book_stock"=>$request->book_stock,
                "book_emoji"=>$request->book_emoji,
                "book_flipbook"=>$request->book_flipbook
            ]);
        if ($edit){
            Alert::success('Tebrikler!', 'Güncelleme Başarılı.');
            return back();
        }else{
            Alert::error('Hata!', 'Güncelleme Başarısız.');
            return back();
        }
    }

    public function bookinsert(){
        return view('Backend.bookinsert');
    }

    public function bookinsertpost(Request $request){

        $request->validate([
            "category_id"=>'required',
            "book_slug"=>'required',
            "book_comment"=>'required',
            "book_name"=>'required',
            "book_writer"=>'required',
            "book_number"=>'required',
            "book_dimensions"=>'required',
            "book_publisher"=>'required',
            "book_paste"=>'required',
            "book_print"=>'required',
            "book_image"=>'required',
            "book_language"=>'required',
            "book_price"=>'required',
            "book_stock"=>'required',
            "book_emoji"=>'required'
        ]);

        $edit = DB::table('books')->insert([
                "category_id"=>$request->category_id,
                "book_slug"=>$request->book_slug,
                "book_comment"=>$request->book_comment,
                "book_name"=>$request->book_name,
                "book_writer"=>$request->book_writer,
                "book_number"=>$request->book_number,
                "book_dimensions"=>$request->book_dimensions,
                "book_publisher"=>$request->book_publisher,
                "book_paste"=>$request->book_paste,
                "book_print"=>$request->book_print,
                "book_image"=>$request->book_image,
                "book_language"=>$request->book_language,
                "book_price"=>$request->book_price,
                "book_stock"=>$request->book_stock,
                "book_emoji"=>$request->book_emoji
            ]);
        if ($edit){
            Alert::success('Tebrikler!', 'Kaydetme Başarılı.');
            return back();
        }else{
            Alert::error('Hata!', 'Kaydetme Başarısız.');
            return back();
        }
    }

    public function remove($id){
        $delete = DB::table('books')
            ->Delete($id);
        if ($delete){
            Alert::success('Başarılı!', 'Silme işlemi Başarılı...');
        }
        return back();
    }

    public function useredit($id)
    {
        $useredit = DB::table('users')->where('id', $id)->get();
        return view('Backend.useredit', compact('useredit'));
    }

    public function usereditpost(Request $request,$id){
        $request->validate([
            'name'=>'required',
            'surname'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'is_active'=>'required'
        ]);

        $post = DB::table('users')
            ->where('id','=',$id)
            ->update([
                "name"=>$request->name,
                "surname"=>$request->surname,
                "email"=>$request->email,
                "phone"=>$request->phone,
                "is_active"=>$request->is_active
            ]);
        if ($post){
            Alert::success('Tebrikler!', 'Güncelleme Başarılı.');
            return back();
        }else{
            Alert::error('Hata!', 'Güncelleme Başarısız.');
            return back();
        }
    }
}
