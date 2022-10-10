<?php

use App\Http\Controllers\Api\ArticleApiController;
use App\Http\Controllers\Api\AuthController;
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
Route::post('/login', [AuthController::class, 'login']);
Route::post('/regiter', [AuthController::class, 'register']);



Route::group(['middleware' => ['auth:sanctum']], function () {



    Route::put('/articles/{articles}/edit', [ArticleApiController::class, 'update']);
    Route::delete('/articles/{articles}/delete', [ArticleApiController::class, 'destroy']);
    //route category
    Route::get('/category', [ArticleApiController::class, 'showCategory']);
    Route::put('/category/{category}/update', [ArticleApiController::class, 'updateCategory']);
    Route::post('/category/create', [ArticleApiController::class, 'storeCategory']);
    Route::delete('/category/{category}/delete', [ArticleApiController::class, 'destroyCategory']);
});
