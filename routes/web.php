<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
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

Route::middleware('guest')->group(function(){
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('login',[AuthController::class,'login']);
Route::post('login',[AuthController::class,'auth']);
Route::get('register',[AuthController::class,'register']);
Route::post('register',[AuthController::class,'regis']);

});
Route::middleware('auth')->group(function(){

    Route::get('profile',[UserController::class,'profile'])->middleware('only_client');
    Route::get('dashboard',[AdminController::class,'index'])->middleware('only_admin');
    Route::get('users',[AdminController::class,'user'])->middleware('only_admin');
    Route::get('user-baned',[AdminController::class,'userbaned'])->middleware('only_admin');
    Route::get('user-detail/{slug}',[AdminController::class,'userdetail'])->middleware('only_admin');
    Route::get('user-ban/{slug}',[AdminController::class,'userban'])->middleware('only_admin');
    Route::get('user-restore/{slug}',[AdminController::class,'userrestore'])->middleware('only_admin');
    Route::get('user-approve/{slug}',[AdminController::class,'userapprove'])->middleware('only_admin');
    Route::get('user-registered',[AdminController::class,'userregistered'])->middleware('only_admin');
    Route::get('category',[AdminController::class,'category'])->middleware('only_admin');
    Route::get('category-add',[AdminController::class,'categoryAdd'])->middleware('only_admin');
    Route::post('category-add',[AdminController::class,'categoryStore'])->middleware('only_admin');
    Route::get('category-edit/{slug}',[AdminController::class,'categoryedit'])->middleware('only_admin');
    Route::put('category-edit/{slug}',[AdminController::class,'categoryupdate'])->middleware('only_admin');
    Route::get('category-delete/{slug}',[AdminController::class,'categorydestroy'])->middleware('only_admin');
    Route::get('books',[AdminController::class,'book'])->middleware('only_admin');
    Route::get('books-add',[AdminController::class,'bookadd']);
    Route::post('books-add',[AdminController::class,'bookStore']);
    Route::get('book-edit/{slug}',[AdminController::class,'booksedit'])->middleware('only_admin');
    Route::put('book-edit/{slug}',[AdminController::class,'bookUpdate'])->middleware('only_admin');
    Route::get('book-delete/{slug}',[AdminController::class,'booksdestroy'])->middleware('only_admin');
    Route::get('hanslog',[AdminController::class,'hanslog'])->middleware('only_admin');
    Route::get('logout',[AuthController::class,'logout']);

    

});    





