<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogPostController;
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



Route::get('/',[BlogPostController::class,'index']);
Route::get('/{blogPost}',[BlogPostController::class,'show'])->name('blogPost-show');
Route::get('/{blogPost}/edit',[BlogPostController::class,'edit']);
Route::put('/{blogPost}/edit',[BlogPostController::class,'update'])->name('blogPost-update');




?>