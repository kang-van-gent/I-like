<?php

use App\Http\Controllers\AuthenticateController;
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
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/blogs', function () {
    return view('client.blog');
});
Route::get('/promotions', function () {
    return view('client.promotion');
});
Route::get('/developer', function () {
    return view('client.developer');
});
Route::get('/post', function () {
    return view('client.post');
});

// Authentication Controller
Route::get('/login', [AuthenticateController::class, 'login']);

// Client after login
Route::get('/dashboard', function () {
    return view('admin.index');
});
Route::get('/updates', function () {
    return view('admin.update');
});
Route::get('/affiliates', function () {
    return view('admin.affiliates');
});
Route::get('/child-panel', function () {
    return view('admin.child-panel');
});
Route::get('/pricing', function () {
    return view('admin.pricing');
});
Route::get('/blog', function () {
    return view('admin.blog');
});
Route::get('/terms', function () {
    return view('admin.terms');
});
Route::get('/addfunds', function () {
    return view('admin.addfunds');
});
Route::get('/buys', function () {
    return view('admin.buys');
});
Route::get('/drip-feed', function () {
    return view('admin.drip-feed');
});
Route::get('/faq', function () {
    return view('admin.faq');
});
Route::get('/howitworks', function () {
    return view('admin.howitworks');
});
Route::get('/subscriptions', function () {
    return view('admin.subscriptions');
});
Route::get('/refill', function () {
    return view('admin.refill');
});
Route::get('/services', function () {
    return view('admin.services');
});
Route::get('/orders', function () {
    return view('admin.orders');
});
Route::get('/massorder', function () {
    return view('admin.massorder');
});
Route::get('/tickets', function () {
    return view('admin.tickets');
});
Route::get('/developers', function () {
    return view('admin.developer');
});


// Master admin
Route::get('/master-admin', function () {
    return view('master.index');
});
