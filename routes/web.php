<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\Auth\RegisteredUserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ArticlesController::class,'index'])->name('articles');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/edit/{id}',[RegisteredUserController::class,'edit']);
Route::PUT('/{id}/update',[RegisteredUserController::class,'update']);

//articles
Route::get('/edit/{id}',[ArticlesController::class,'edit']);
Route::PUT('/{id}/update',[ArticlesController::class,'update']);
