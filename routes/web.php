<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/detail/{article}/article', [HomeController::class, 'detailArticle'])->name('detail.article');
Route::get('dashboard/create-post', [PostController::class, 'indexPost'])->name('page.new.post');
Route::post('dashboard/create-post', [PostController::class, 'storePost'])->name('create.new.post');
Route::get('dashboard/create-category', [PostController::class, 'indexCategory'])->name('page.new.category');
Route::post('dashboard/create-category', [PostController::class, 'storeCategory'])->name('create.new.category');
