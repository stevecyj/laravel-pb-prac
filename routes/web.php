<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;

// use App\Http\Controllers\Controls\PageController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

/*
|--------------------------------------------------------------------------
| page 前台,not login
|--------------------------------------------------------------------------
| products
| products/search
| users
| carts/index
|
*/

Route::get('/', [PageController::class,'home']);

/*
|--------------------------------------------------------------------------
| page 前台,login
|--------------------------------------------------------------------------
| orders
| profiles
| carts/purchase
|
*/


/*
|--------------------------------------------------------------------------
| controls 後台,admin
|--------------------------------------------------------------------------
| controls/products
| controls/orders
| controls/brands
| controls/categories
| controls/carts
| controls/pages
| controls/users
|
*/

Route::prefix('controls')->name('controls.')->group(function () {
    Route::get('/', ['App\Http\Controllers\Controls\PageController','home'])->name('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';