<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;


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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/paket/{id}', [PaketController::class, 'go'])->name('paket');

Route::get('/catalog', [CatalogController::class, 'load'])->name('catalog');

Route::get('/catalog/all', [CatalogController::class, 'all'])->name('all');

Route::get('/catalog/{category}', [CatalogController::class, 'category']);

Route::get('/add', [PaketController::class, 'add'])->middleware('admin');

Route::get('/paket/{id}/tocart', [CartController::class, 'add'])->middleware('auth');

Route::post('/catalog/check', [PaketController::class, 'check']);

Route::post('/paket/{id}/review', [ReviewController::class, 'check']);

Route::get('/cart/checkout', [CartController::class, 'checkout']);

Route::get('/user/{id}/cart/{paket}/del', [CartController::class, 'del']);

Route::get('/welcome', function() {
    return view('welcome');
});

Route::get('/about', function() {
    return view('about');
});

Route::get('/cart/{id}', [AdminController::class, 'cart']);

Route::get('/user/{id}', [UserController::class, 'go'])->name('user');

Route::get('/user/{id}/cart', [UserController::class, 'cart'])->name('cart');

Route::get('/admin', function() {
    echo 'You are admin';
})->middleware('admin');

Route::get('/admin/userlist', [AdminController::class, 'userlist'])->middleware('admin');

Route::get('/admin/orderlist', [AdminController::class, 'orderlist'])->middleware('admin');

// Route::get('/login', [LoginController::class, 'go']);
// Route::post('/login/check', [LoginController::class, 'check']);


// Route::get('/register', [RegisterController::class, 'go']);
// Route::post('/register/check', [RegisterController::class, 'check']);