<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Model\Product;
use App\Model\Review;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('/products', 'ProductController');

Route::prefix('products')->group(function () {
    Route::apiResource('/{product}/reviews', 'ReviewController');
});