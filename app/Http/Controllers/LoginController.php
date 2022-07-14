<?php

namespace App\Http\Controllers;

use App\Models\Sharing;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    /* @var User|Model
     * @var Sharing|Model
     */

    public $user;
    public $sharing;

    public function __construct(User $user, Sharing $sharing)
    {
        $this->user = $user;
        $this->sharing = $sharing;
    }

    public function register(){
        return view('Login.register');
    }

    public function registerpost(Request $request){
        $cod = Str::random(6);
        $date = date('Y-m-d H:i:s');
        $request->validate([
            'name'=>'required',
            'surname'=>'required',
            'email'=>'required',
            'password'=>'required',
            'phone'=>'required',

        ]);
        $record = DB::table("users")->insert([
            "name"=>$request->name,
            "surname"=>$request->surname,
            "email"=>$request->email,
            "password"=>Hash::make($request->password),
            "phone"=>$request->phone,
            "date"=>$date,
            "permission_level"=>("user"),
            "is_active"=>('1'),
            "cod"=>$cod
        ]);
        $details = [
            'title' => 'Lütfen mail adresinizi onaylayın..',
            'body' => 'Onay kodunuz:  '. $cod
        ];

        Mail::to($request->email)->send(new \App\Mail\TestMail($details));
        print_r($cod);
        if($record){
            Alert::success('Başarılı!', 'Kayıt oluşturuldu..');
            return redirect('login');
        }else{
            Alert::error('Hata!', 'E-mail veya şifre hatalı..');
        }
    }

    public function login(){
        return view('Login.login');
    }

    public function loginpost(Request $request){
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        $isemailverify = User::where("email", $credentials["email"])->value('email_verify');
        $is_active = User::where("email", $credentials["email"])->value('is_active');

        if ($is_active == 1) {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                if ($isemailverify == 0) {
                    return redirect()->route('update');
                }
                Alert::alert('Başarılı', 'Giriş Yapıldı...', 'success');
                if (Auth::user()->permission_level == 'admin') {
                    return redirect()->intended(route('dashboard'));
                } else {
                    return redirect()->intended(route('home'));
                }
            } else {
                Alert::error('Hata', 'E-mail veya şifre hatalı...', 'error');
                return redirect()->route('login');
            }
        } else {
            Alert::error('Hata', 'E-mail veya şifre hatalı...', 'error');
            return redirect()->route('error');
        }
    }

    public function update(){
        $user = User::where('id','=',Auth::user()->id)->get();
        $sharing = $this->sharing->sharing();
        return view('Frontend.update',compact('sharing','user'));
    }

    public function updatepost(Request $request){

        $request->validate([
            'name'=>'required',
            'surname'=>'required',
            'email'=>'required',
            'email_verify'=>'required',
            'phone'=>'required',

        ]);
        $post = DB::table("users")
            ->where('id',Auth::user()->id)
            ->update([
                "name"=>$request->name,
                "surname"=>$request->surname,
                "email"=>$request->email,
                "email_verify"=>$request->email_verify,
                "phone"=>$request->phone,
                ]);

        if ($post){
            Alert::success('Başarılı!', 'Profil Güncellendi..');
            return redirect()->route('home');
        }else{
            Alert::error('Hata!', 'Profil Güncellenemedi..');
            return back();
        }
    }


    public function exit(){
        Auth::logout();
        Alert::alert('Başarılı', 'Çıkış Yapıldı...', 'success');
        return redirect()->intended(route('login'));
    }
}
