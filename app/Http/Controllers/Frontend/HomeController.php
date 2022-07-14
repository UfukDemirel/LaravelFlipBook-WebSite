<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Sharing;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    /* @var Book|Model
     * @var Cart|Model
     * @var Category|Model
     * @var Sharing|Model
     * @var User|Model
     */

    public $book;
    public $cart;
    public $category;
    public $sharing;
    public $user;

    public function __construct(Book $book, Cart $cart, Category $category, Sharing $sharing, User $user)
    {
        $this->book = $book;
        $this->cart = $cart;
        $this->category = $category;
        $this->sharing = $sharing;
        $this->user = $user;
    }

    public function home(){
        $book = $this->book->book();
        $bookcart = $this->book->getCart();
        $count = $this->cart->count();
        $category = $this->category->getCategory();
        return view('Frontend.home',compact('bookcart','count','book','category'));
    }

    public function book($slug){
        $cart = Cart::where('user_id','=',Auth::id())->get();
        $bookslug = $this->book->getRead($slug);
        $book = $this->book->getCart($slug);
        $count = $cart->count();
        return view('Frontend.book',compact('bookslug','cart','book','count'));
    }

    public function addpost(Request $request)
    {
        $data = Cart::where('book_id',$request->book_id)->where('user_id',Auth::id())->first();
        if ($data){
            $sav = $data->quantity + $request->input('quantity');
            DB::table('cart')
                ->where('user_id',Auth::id())
                ->where('book_id',$request->book_id)
                ->update([
                    "quantity"=>$sav
                ]);
            Alert::success('Başarılı!', 'Ürün eklendi..');
        }else{
            $new = new Cart;
            $new->user_id = Auth::id();
            $new->book_id = $request->id;
            $new->quantity = $request->input('quantity');
            $new->save();
            if ($new){
                Alert::success('Başarılı!', 'Ürün Sepete eklendi..');
            }
        }

        $category = DB::table('category')->get();
        $top = 0;
        $book = $this-> book ->getCart();

        return redirect()->back();
    }

    public function cart()
    {
        $category = DB::table('category')->get();
        $top = 0;
        $book = $this-> book ->getCart();
        return view('Frontend.cart',compact('category','top','book'));
    }

    public function cartdetails(Request $request)
    {
        if ($request->isMethod('post')) {
            $cart = Cart::where('user_id', '=', Auth::id())->get();
            $toplam = $request->toplam;
            $book = $this->book->getCart();
            $category = $this->category->getCategory();
            return view('Frontend.cartdetails', compact('category', 'book', 'toplam', 'cart'));
        } else {
            Alert::error('Hata!', 'Yazı bilgisi yok.');
        }
    }

    public function order_end(Request $request){
        $onay = 1;
        if ($onay == 1) {
            DB::table('order')->insert([
                "user_id" => Auth::user()->id,
                "name" => $request->name,
                "surname" => $request->surname,
                "address" => $request->address,
                "phone" => $request->phone,
                "email" => $request->email,
                "country" => $request->country,
                "city" => $request->city,
                "postcode"=>$request->postcode,
            ]);
            $siparis_id = DB::getPdo()->lastInsertId();
        }
        $book = $this-> book ->getCart();
        foreach ($book as $key) {
            DB::table('order_details')->insert([
                "siparis_id" => $siparis_id,
                "user_id" => Auth::user()->id,
                "book_id" => $key->book_id,
                "order_id" => $key->id,
                "price" => $key->book_price,
                "amount" => $request->amount,
                "quantity" => $request->amount * $request->book_price,
                "name" => $key->book_name
            ]);
        }
        Alert::success('Başarılı!', 'Alışveriş İşleminiz tamamlandı..');
        DB::select("Delete From cart where user_id=?", [Auth::user()->id]);
        $basket = Cart::where('user_id','=',Auth::id())->get();
        $count = $basket->count();
        $book = $this-> book ->getCart();
        $category = $this->category->getCategory();
        return view("Frontend.home",compact('category','book','count','basket'));
    }

    public function point($slug){
        $cart = Cart::where('user_id','=',Auth::id())->get();
        $count = $cart->count();
        $book = $this->book->getCart($slug);
        $rating = $this->book->getSlug($slug);
        $category = $this->category->getCategory();
        return view('point',compact('category','book','count','rating'));
    }

    public function bookpointpost(Request $request){
        $cart = Cart::where('user_id','=',Auth::id())->get();
        $category = $this->category->getCategory();
        $book = $this->book->getCart();
        $count = $cart->count();
        $request->validate([
            'score_name'=>'required',
            'score_date'=>'required',
            'score_comment'=>'required',
            'rating'=>'required'
        ]);
        $nice=DB::table("score")->insert([
            "score_name"=>$request->score_name,
            "score_date"=>$request->score_date,
            "score_comment"=>$request->score_comment,
            "rating"=>$request->rating,
            "book_id"=>$request->book_id
        ]);
        if($nice){
            Alert::alert('Başarılı!', 'Yorum yapıldı..', 'success');
            return view('home',compact('count','book','category'));
        }else{
            Alert::alert('Hata!', 'Yorum yapılamadı..', 'error');
        }
        return back();
    }

    public function post(Request $request){
        $request->validate([
            "quantity"=>'required'
        ]);

        $quantity = DB::table('cart')
            ->where('user_id',Auth::id())
            ->update([
                "quantity"=>$request->quantity
            ]);
        if($quantity){
            Alert::alert('Başarılı!', 'Ürün Güncellendi..', 'success');
            return back();
        }else{
            Alert::alert('Hata!', 'Ürün Güncellenemedi..', 'error');
        }
        return back();
    }

    public function products(){
        $book = $this->book->book();
        return view('Frontend.products',compact('book',$book));
    }

    public function contact(){
        $sharing = $this->sharing->sharing();
        return view('Frontend.contact',compact('sharing'));
    }

    public function contactpost(Request $request){
        $date = date('Y-m-d H:i:s');
        $request->validate([
            'name'=>'required',
            'surname'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required',

        ]);
        $record = DB::table("contact")->insert([
            "name"=>$request->name,
            "surname"=>$request->surname,
            "email"=>$request->email,
            "subject"=>$request->subject,
            "message"=>$request->message,
            "date"=>$date,
        ]);

        if($record){
            Alert::success('Başarılı!', 'Mesajınız iletildi..');
            return redirect()->intended(route('home'));
        }else{
            Alert::error('Hata!', 'Mesajınız iletilirken hata oluştu..');
            return back();
        }
    }

    public function hesabim(){
        $user = User::where('id','=',Auth::user()->id)->get();
        $sharing = $this->sharing->sharing();
        return view('Frontend.hesabim',compact('user','sharing'));
    }

    public function kitaplarim(){
        $kitap = $this->user->kitap();
        $sharing = $this->sharing->sharing();
        return view('Frontend.kitaplarim',compact('kitap','sharing'));
    }
}
