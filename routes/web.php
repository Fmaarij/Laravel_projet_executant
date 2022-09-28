<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AvatarController;
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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');




//articles
Route::get('/', [ArticlesController::class,'index'])->name('articles');
Route::get('/editarticles/{id}',[ArticlesController::class,'edit'])->name('editarticles');
Route::PUT('/{id}/updatearticle',[ArticlesController::class,'update']);
Route::DELETE('/{id}/deletearticle',[ArticlesController::class,'destroy']);
//users
Route::get('/users', [RegisteredUserController::class,'index'])->name('users');
Route::get('/edituser/{id}',[RegisteredUserController::class,'edit']);
Route::PUT('/{id}/updateuser',[RegisteredUserController::class,'update']);
Route::DELETE('/{id}/deleteuser',[RegisteredUserController::class,'destroy']);


//avatars
Route::get('/avatars', [AvatarController::class,'index'])->name('avatars');
Route::get('/createavatar', [AvatarController::class,'create'])->name('createavatar');
Route::post('/storeavatar', [AvatarController::class,'store']);
Route::get('/showavatar', [AvatarController::class,'show'])->name('showavatar');
Route::get('/editavatar/{id}', [AvatarController::class,'edit'])->name('editavatar');
Route::put('/{id}/updateavatar', [AvatarController::class,'update']);
Route::delete('/{id}/delete', [AvatarController::class,'destroy']);

require __DIR__.'/auth.php';



