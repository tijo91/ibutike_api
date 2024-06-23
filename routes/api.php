<?php

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


    


});


/***
 *
 * END : ONLY FOR THE ROUTES THAT NEED TO GET CONNECTED
 *
 */
