<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MasterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Client before login
Route::get('/', function () {
    return view('client.index');
});
Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/promotions', function () {
    return view('client.promotion');
});
Route::get('/developer', function () {
    return view('client.developer');
});


Route::get('/blogs', [HomeController::class, 'blogs']);
Route::get('/post', [HomeController::class, 'post']);


// Authentication Controller
Route::get('/login', [AuthenticateController::class, 'index']);
Route::post('/checklogin', [AuthenticateController::class, 'login']);
Route::post('/regis', [AuthenticateController::class, 'register']);
Route::get('/logout', [AuthenticateController::class, 'logout']);

// Client after login
Route::get('/dashboard', [AdminController::class, 'index']);

Route::get('/updates', [AdminController::class, 'updateServices']);
Route::get('/affiliates', [AdminController::class, 'affiliates']);
Route::get('/child-panel', [AdminController::class, 'childPanel']);
Route::get('/pricing', [AdminController::class, 'pricing']);
Route::get('/blog', [AdminController::class, 'blog']);
Route::get('/terms', [AdminController::class, 'terms']);
Route::get('/addfunds', [AdminController::class, 'addfunds']);
Route::get('/buys', [AdminController::class, 'buys']);
Route::get('/drip-feed', [AdminController::class, 'dripFeed']);
Route::get('/faq', [AdminController::class, 'faq']);
Route::get('/howitworks', [AdminController::class, 'howitworks']);
Route::get('/subscriptions', [AdminController::class, 'subscriptions']);
Route::get('/refill', [AdminController::class, 'refill']);
Route::get('/orders', [AdminController::class, 'orders']);
Route::get('/massorder', [AdminController::class, 'massorder']);
Route::get('/tickets', [AdminController::class, 'tickets']);
Route::get('/developers', [AdminController::class, 'developers']);

Route::get('/services', [AdminController::class, 'services']);
Route::get('/services/{productId}', [AdminController::class, 'store'])->name('service.store');
Route::get('/remove-item/{productId}', [AdminController::class, 'removeItem'])->name('service.remove');



// Master admin
Route::get('/master-admin', [MasterController::class, 'index']);
