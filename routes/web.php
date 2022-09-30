<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AvatarController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PhotoController;
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
Route::get('/createarticle',[ArticlesController::class,'create'])->middleware('webmasterrole')->name('createarticle');
Route::post('/storearticle',[ArticlesController::class,'store']);
Route::get('/editarticles/{id}',[ArticlesController::class,'edit'])->name('editarticles')->middleware('webmasterrole');
Route::PUT('/{id}/updatearticle',[ArticlesController::class,'update'])->middleware('webmasterrole');
Route::DELETE('/{id}/deletearticle',[ArticlesController::class,'destroy'])->middleware('webmasterrole');

//users
Route::get('/users', [RegisteredUserController::class,'index'])->middleware('adminrole')->name('users');
Route::get('/createuser', [RegisteredUserController::class,'createuser'])->middleware('adminrole')->name('createuser');
Route::post('/storeeuser', [RegisteredUserController::class,'storeuser'])->middleware('adminrole');
Route::get('/edituser/{id}',[RegisteredUserController::class,'edit'])->middleware('adminrole');
Route::PUT('/{id}/updateuser',[RegisteredUserController::class,'update'])->middleware('adminrole');
Route::DELETE('/{id}/deleteuser',[RegisteredUserController::class,'destroy'])->middleware('adminrole');




//avatars
Route::get('/avatars', [AvatarController::class,'index'])->name('avatars')->middleware(['adminrole']);
Route::get('/createavatar', [AvatarController::class,'create'])->name('createavatar')->middleware(['adminrole']);
Route::post('/storeavatar', [AvatarController::class,'store'])->middleware(['adminrole']);
Route::get('/showavatar', [AvatarController::class,'show'])->name('showavatar')->middleware(['adminrole']);
Route::get('/editavatar/{id}', [AvatarController::class,'edit'])->name('editavatar')->middleware(['adminrole']);
Route::put('/{id}/updateavatar', [AvatarController::class,'update'])->middleware(['adminrole']);
Route::delete('/{id}/deleteavatar', [AvatarController::class,'destroy'])->middleware(['adminrole']);

// photos
Route::get('/photos', [PhotoController::class,'index'])->name('photos');
Route::get('/createphotos', [PhotoController::class,'create'])->name('createphotos');
Route::post('/storephoto', [PhotoController::class,'store']);
Route::get('/showphoto', [PhotoController::class,'show'])->name('showphoto');
Route::get('/editphoto/{id}', [PhotoController::class,'edit']);
Route::put('/{id}/updatephoto', [PhotoController::class,'update']);
Route::delete('/photos', [PhotoController::class,'destroy']);

//gallery
Route::get('/gallery', [GalleryController::class,'index'])->name('gallery');
Route::post('/downloadpic/{id}', [GalleryController::class,'telecharge']);

//category
Route::get('/category', [CategoryController::class,'index'])->middleware(['adminrole'])->name('category');
Route::get('/createcategory', [CategoryController::class,'create'])->middleware(['adminrole'])->name('createcategory');
Route::post('/storecategory', [CategoryController::class,'store'])->middleware(['adminrole']);
Route::get('/editcategory/{id}', [CategoryController::class,'edit'])->middleware(['adminrole'])->name('editcategory');
Route::put('/{id}/updatecategory', [CategoryController::class,'update'])->middleware(['adminrole']);
Route::delete('/{id}/deletecategory',[CategoryController::class,'destroy'])->middleware(['adminrole']);

require __DIR__.'/auth.php';



