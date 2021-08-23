<?php

use App\Http\Controllers\FluentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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
Route ::get('/',[ProductController::class,'index'])->name('ProductController.index');
// Route ::get('/home/{name}?',[HomeController::class,'index'])->name('home.index');
Route ::get('/user',[UserController::class,'index'])->name('user.index');
Route ::get('/Login',[LoginController::class,'index'])->name('Login.index');
Route ::get ('/fluent-string',[FluentController:: class,'index'])-> name('fluents.index');
Route ::post('/Login',[LoginController::class,'loginsubmit'])->name('login.submit');


Route::group(['prefix'=>'posts'],function(){
    Route ::get('/',[PostController::class,'getAllPost'])->name('post.getAllPost');
    Route ::post('/add-post',[PostController::class,'addPostSubmit'])->name('post.addsubmit');
    Route ::get('/add-post',[PostController::class,'addPost'])->name('post.add');
    Route ::get('/post/{id?}',[PostController::class,'getPostId'])->name('post.getbyid');
    Route ::delete('/delete-post/{id}',[PostController::class,'deletePost'])->name('post-delete');
    Route ::get('/edit-post/{id}',[PostController::class,'editpost'])->name('post.edit');
});
