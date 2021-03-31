<?php

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
|
*/


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
