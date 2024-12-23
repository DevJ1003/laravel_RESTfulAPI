<?php

use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
// use Illuminate\Routing\Route;
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

// Route::middleware()('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Buyers
Route::resource('buyers', \App\Http\Controllers\Buyer\BuyerController::class, ['only' => ['index', 'show']]);

// Sellers
Route::resource('sellers', \App\Http\Controllers\Seller\SellerController::class, ['only' => ['index', 'show']]);

// Products
Route::resource('products', \App\Http\Controllers\Product\ProductController::class, ['only' => ['index', 'show']]);

// Categories
Route::resource('categories', \App\Http\Controllers\Category\CategoryController::class, ['except' => ['create', 'edit']]);

// Transactions
Route::resource('transactions', \App\Http\Controllers\Transaction\TransactionController::class, ['only' => ['index', 'show']]);

// Users
// Route::middleware('api')->group(function () {
Route::resource('users', \App\Http\Controllers\User\UserController::class, ['except' => ['create', 'edit']]);
// });
