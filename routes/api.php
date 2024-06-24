<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');




/***
 *
 * START : ONLY FOR THE ROUTES THAT NEED TO GET CONNECTED
 *
 */

Route::middleware(['auth:sanctum', 'api'])->group( function(){


    //routes to shopcontroller
    Route::get('shops', [ShopController::class, 'index'])->name('shops.index');
    Route::get('shops/create', [ShopController::class, 'create'])->name('shops.create');
    Route::post('shops', [ShopController::class, 'store'])->name('shops.store');
    Route::get('shops/{shop}', [ShopController::class, 'show'])->name('shops.show');
    Route::get('shops/{shop}/edit', [ShopController::class, 'edit'])->name('shops.edit');
    Route::put('shops/{shop}', [ShopController::class, 'update'])->name('shops.update');
    Route::delete('shops/{shop}', [ShopController::class, 'destroy'])->name('shops.destroy');

    //routes to productscontroller
    Route::get('products', [ProductController::class, 'index'])->name('products.index');
    Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('products', [ProductController::class, 'store'])->name('products.store');
    Route::get('products/{product}', [ProductController::class, 'show'])->name('products.show');
    Route::get('products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('products/{product}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');


    Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::get('users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('users', [UserController::class, 'store'])->name('users.store');
    Route::get('users/{product}', [UserController::class, 'show'])->name('users.show');
    Route::get('users/{product}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('users/{product}', [UserController::class, 'update'])->name('users.update');
    Route::delete('users/{product}', [UserController::class, 'destroy'])->name('users.destroy');


});


/***
 *
 * END : ONLY FOR THE ROUTES THAT NEED TO GET CONNECTED
 *
 */
