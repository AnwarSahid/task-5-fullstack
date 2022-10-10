<?php

use App\Http\Controllers\Api\ArticleApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/articles', [ArticleApiController::class, 'index']);
Route::get('/articles/{article}', [ArticleApiController::class, 'show']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'auth'], function () {
    Route::post('/category/create', [ArticleApiController::class, 'storeCategory']);
});
