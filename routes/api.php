<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AuthorsController;
use \App\Http\Controllers\BooksController;

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::middleware('auth:api')->prefix('v1')->group(function() {
    Route::get('test', function (Request $request) {
        return $request->user();
    });
    Route::apiResource('/authors', AuthorsController::class);
    Route::apiResource('/books', BooksController::class);
//    Route::get('/authors/{author}', [AuthorsController::class, 'show']);
//    Route::get('/authors', [AuthorsController::class, 'index']);
});
//for specific author
//author/{author}
