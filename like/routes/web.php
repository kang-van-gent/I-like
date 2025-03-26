<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\PaymentController;
use App\Models\promotions;
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
    $promotions = promotions::orderBy('id', 'desc')->limit(5)->get();
    return view('client.index', ['promotions' => $promotions]);
});
Route::get('/register', function () {
    if (session('data') != null) {
        return redirect('/');
    }
    return view('auth.register');
});

// Route::get('/promotions', function () {
//     return view('client.promotion');
// });

Route::get('/developer', function () {
    return view('client.developer');
});

Route::get('/blogs', [HomeController::class, 'blogs']);
Route::get('/post', [HomeController::class, 'post']);


// Authentication Controller
Route::get('/login', [AuthenticateController::class, 'index']);
Route::get('/reset-password', [AuthenticateController::class, 'resetPassword']);
Route::get('/new-password', [AuthenticateController::class, 'newPassord']);
Route::post('/checklogin', [AuthenticateController::class, 'login']);
Route::post('/confirm-email', [AuthenticateController::class, 'confirmEmail']);
Route::post('/regis', [AuthenticateController::class, 'register'])->name('auth.regis');
Route::post('/update-password', [AuthenticateController::class, 'updatePassword'])->name('auth.updatePassword');
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
Route::get('/orders', [AdminController::class, 'orders'])->name('admin.orders');
Route::get('/filter-orders', [AdminController::class, 'filterOrders'])->name('filter.orders');

Route::get('/massorder', [AdminController::class, 'massorder']);
Route::get('/tickets', [AdminController::class, 'tickets']);
Route::get('/developers', [AdminController::class, 'developers']);

Route::get('/services', [AdminController::class, 'services'])->name('admin.services');
Route::get('/filter-services', [AdminController::class, 'filterServices'])->name('filter.services');
Route::get('/services/{productId}', [AdminController::class, 'store'])->name('service.store');
Route::get('/product/details', [AdminController::class, 'getProductByDetails'])->name('product.details');
Route::post('/service/updateQuantity', [AdminController::class, 'updateQuantity'])->name('service.updateQuantity');
Route::get('/remove-item/{productId}', [AdminController::class, 'removeItem'])->name('service.remove');
Route::get('/promotions', [AdminController::class, 'promotions']);
Route::get('/postPromotion', [AdminController::class, 'postPromotion']);
Route::get('/packages', [AdminController::class, 'package']);
Route::get('/postPackage', [AdminController::class, 'postPackage']);



// Master admin
Route::resource('/admin',  MasterController::class);
Route::post('/admin/create-product', [MasterController::class, 'createProduct']);
Route::post('/admin/create-promotion', [MasterController::class, 'createPromotion']);
Route::post('/admin/create-blog', [MasterController::class, 'createBlog']);
Route::get('/admin/delete-product/{id}', [MasterController::class, 'deleteProduct']);
Route::get('/admin/delete-promotion/{id}', [MasterController::class, 'deletePromotion']);
Route::get('/admin/delete-blog/{id}', [MasterController::class, 'deleteblog']);


Route::get('/payment', [PaymentController::class, 'showPaymentForm'])->name('admin.payment');
Route::post('/payment/create', [PaymentController::class, 'createOrder'])->name('payment.create');
Route::get('/payment/return', [PaymentController::class, 'return'])->name('payment.return');
Route::post('/payment/notify', [PaymentController::class, 'notify'])->name('payment.notify');
Route::post('/payment/buy', [PaymentController::class, 'buy'])->name('payment.buy');

Route::get('/payment/fail', function () {
    // This route is just a dummy and does nothing
    return response()->json(['failed' => 'Dummy fail URL reached']);
})->name('payment.fail');

Route::get('/payment/success', function () {
    // This route is just a dummy and does nothing
    return response()->json(['success' => 'Top up successfully']);
})->name('payment.success');

Route::post('/redeem-reward', [AdminController::class, 'redeemReward'])->name('admin.redeemReward');
