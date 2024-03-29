<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewCommandController;
use App\Http\Controllers\AllCommandController;
use App\Http\Controllers\topPageController;
use App\Http\Controllers\RandomQuizController;


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

// // Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('allcommand', AllCommandController::class);
Route::resource('reviewcommand', ReviewCommandController::class);
Route::resource('top', topPageController::class);
Route::resource('quiz', RandomQuizController::class);


