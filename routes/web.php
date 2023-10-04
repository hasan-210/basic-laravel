<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeContoller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StoreController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/home',[HomeContoller::class,'index']);
Route::resource('/product',ProductController::class);

// ------------------  POST ---------------------------//
Route::get('/post',[PostController::class,'index'])->name('home');
Route::get('/create',[PostController::class,'create'])->name('create');
Route::post('/store',[PostController::class,'store'])->name('store');
Route::get('/update/{id}',[PostController::class,'update'])->name('update');
Route::post('/edit/{id}',[PostController::class,'edit'])->name('edit');
Route::get('/delete/{id}',[PostController::class,'delete'])->name('delete');


Route::resource('/store',StoreController::class)->middleware('auth');



route::controller(PostContoller::class)->group(function(){
    Route::get('/post','index')->name('home');
Route::get('/create','create')->name('create');
Route::post('/store','store')->name('store');
Route::get('/update/{id}','update')->name('update');
Route::post('/edit/{id}','edit')->name('edit');
Route::get('/delete/{id}','delete')->name('delete');
});

// ------------------  auth ---------------------------//
Route::controller(AuthController::class)->group(function(){
    Route::get('register','register')->name('register');
    Route::get('login','login')->name('login');
    Route::post('register','store')->name('register.store');
});


Route::get('/get_phone',[PostController::class,'get_phone'])->name('get_phone');
