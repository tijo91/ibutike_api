<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EntreeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SortieController;
use App\Http\Controllers\UniteMesureController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Auth::routes();

Route::apiResources([
    'roles' => RoleController::class,
    'users' => UserController::class,
    'categories' => CategoryController::class,
    'unite_mesures' => UniteMesureController::class,
    'products' => ProductController::class,
    'sorties' => SortieController::class,
    'entrees' => EntreeController::class,
    'payments'=>PaymentController::class
]);

Route::post('/login', [LoginController::class, 'login'])->name('login');

// Route::group(['middleware' => ['cors']], function () {

// });

Route::post('/home', [HomeController::class, 'home'])->name('home');

Route::get('/all_clear', function(){
    $val1 = Artisan::call('cache:clear');
    $val2 = Artisan::call('config:clear');
    $val3 = Artisan::call('config:cache');
    $val4 = Artisan::call('view:clear');
    $val5 = Artisan::call('route:clear');
    return response()->json('cache cleared');

  })->name('all_clear');
