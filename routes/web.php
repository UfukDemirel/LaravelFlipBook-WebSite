<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Search\SearchController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('login',[LoginController::class,"login"])->name('login');
Route::post('loginpost',[LoginController::class,"loginpost"])->name('loginpost');
Route::get('register',[LoginController::class,"register"])->name('register');
Route::post('registerpost',[LoginController::class,"registerpost"])->name('registerpost');
Route::get('home',[HomeController::class,"home"])->name('home');
Route::get('book/{slug}',[HomeController::class,"book"])->name('book.slug');
Route::get('update',[LoginController::class,"update"])->name('update');
Route::post('updatepost',[LoginController::class,"updatepost"])->name('updatepost');
Route::get('exit',[LoginController::class,"exit"])->name('exit');
Route::get('category/{slug}',[HomeController::class,"category"])->name('book.category');
Route::get('products',[HomeController::class,"products"])->name('products');
Route::get('contact',[HomeController::class,"contact"])->name('contact');
Route::post('contactpost',[HomeController::class,"contactpost"])->name('contactpost');

Route::prefix('/')->middleware('isPeople')->group(function (){
Route::get('hesabim',[HomeController::class,"hesabim"])->name('hesabim');
Route::get('kitaplarim',[HomeController::class,"kitaplarim"])->name('kitaplarim');
Route::get('cart',[HomeController::class,"cart"])->name('cart');
Route::post('post',[HomeController::class,"post"])->name('post');
Route::post('cartdetails',[HomeController::class,"cartdetails"])->name('cartdetails');
Route::post('order_end',[HomeController::class,"order_end"])->name('order_end');
Route::post('get',[HomeController::class,"get"])->name('get');
Route::get('delete/{id}',[HomeController::class,"delete"])->name('delete');
Route::post('addpost/{id}',[HomeController::class,"addpost"])->name('addpost');
});

Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::prefix('/')->middleware('isAdmin')->group(function (){
    Route::get('dashboard',[AdminController::class,"dashboard"])->name('dashboard');
    Route::get('iletisim',[AdminController::class,"iletisim"])->name('iletisim');
    Route::get('profile',[AdminController::class,"profile"])->name('profile');
    Route::post('profilepost',[AdminController::class,"profilepost"])->name('profilepost');
    Route::get('iletisim',[AdminController::class,"iletisim"])->name('iletisim');
    Route::get('bookadmin',[AdminController::class,"bookadmin"])->name('bookadmin');
    Route::get('bookadminedit/{id}',[AdminController::class,"bookadminedit"])->name('bookadminedit');
    Route::post('bookadmineditpost/{id}',[AdminController::class,"bookadmineditpost"])->name('bookadmineditpost');
    Route::get('bookinsert',[AdminController::class,"bookinsert"])->name('bookinsert');
    Route::post('bookinsertpost',[AdminController::class,"bookinsertpost"])->name('bookinsertpost');
    Route::get('remove/{id}',[AdminController::class,"remove"])->name('remove');
    Route::get('useredit/{id}',[AdminController::class,"useredit"])->name('useredit');
    Route::post('usereditpost/{id}',[AdminController::class,"usereditpost"])->name('usereditpost');
    Route::get('destroy/{id}',[AdminController::class,"destroy"])->name('destroy');
    Route::get('searchmember',[SearchController::class,"searchmember"])->name('searchmember');
    Route::get('searchcontact',[SearchController::class,"searchcontact"])->name('searchcontact');
    Route::get('searchbooks',[SearchController::class,"searchbooks"])->name('searchbooks');
});
