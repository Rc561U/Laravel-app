<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace'=>'App\Http\Controllers\Post'], function(){
    Route::get('/posts', "IndexController")->name('post.index');
    Route::get('/posts/create', "CreateController")->name('post.create');
    Route::post('/posts/create', "StoreController")->name('post.store');
    Route::get('/posts/{post}', "ShowController")->name('post.show');
    Route::get('/posts/{post}/edit', "EditController")->name('post.edit');
    Route::patch('/posts/{post}/update', "UpdateController")->name('post.update');
    Route::delete('/posts/{post}', "DestroyController")->name('post.destroy');

});





Route::get("/about", "App\Http\Controllers\AboutController@index")->name('about.index');
Route::get("/contact", "App\Http\Controllers\ContactController@index")->name('contact.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
