<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\Admin\ProductController;


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

// Route::get('/', function () {
//     return view('welcome');
// });



Auth::routes();
 
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/logout', [App\Http\Controllers\Auth\LogoutController::class, 'logout'])->name('logout');

// /*-------Add Products ---------*/
// Route::get('add-prod', [ProductController::class, 'create']);
// Route::post('add-prod', [ProductController::class, 'store']);




// Route::get('product', [ProductController::class, 'index']);


Route::middleware(['auth', 'isAdmin'])->group(function(){
     Route::get('/dashboard','Admin\ProductController@index');
     Route::get('create','Admin\ProductController@create');
     Route::post('create','Admin\ProductController@store');
     Route::get('edit/{id}', 'Admin\ProductController@edit');
     Route::put('update/{id}', 'Admin\ProductController@update');
     // Route::delete('delete/{id}', [ProductController::class, 'destroy']);
     // Route::delete('posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
     Route::get('delete/{id}', 'Admin\ProductController@destroy');
});

