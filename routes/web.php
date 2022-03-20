<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Product;

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