<?php

use App\Http\Controllers\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ClientController;

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

// use component ,controller and a blade welcoma
Route::get('/',[Product::class, 'index'])->name('welcome.index');
Route::get('/home/{name?}',[HomeController::class, 'index'])->name('home.index');

// Route::get('/users', function(){
//     return view('users');
// });

// using controllers to render a view
Route::get('/users',[UsersController::class,'users']);

// client Http request
Route::get('/posts',[ClientController::class,'getAllPost'])->name('posts.getallpost');
Route::get('/posts/{id}',[ClientController::class,'getPostById'])->name('posts'.'getpostbyid');
Route::get('/add-post',[ClientController::class,'addPost'])->name('posts.addpost');
Route::get('/update-post',[ClientController::class,'updatePost'])->name('posts.updatepost');
Route::get('/delete-post/{id}',[ClientController::class,'deletePost'])->name('posts.delete');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/add-post',[PostController::class,'addPost']);
Route::get('/add-comment/{id}',[PostController::class,'addComment']);
