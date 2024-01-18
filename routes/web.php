<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscriberController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/fotogaleria', function () {
    return view('fotogaleria');
});

Route::get('/checkout', [CheckoutController::class, 'index']);


Route::get('/kurzy', function () {
    return view('kurzy');
});

Route::get('/osobny_automobil', function () {
    return view('osobny_automobil');
});

Route::get('/motocykel', function () {
    return view('motocykel');
});

Route::get('/nakladny_automobil', function () {
    return view('nakladny_automobil');
});

Route::get('/autobus', function () {
    return view('autobus');
});

Route::get('/traktor', function () {
    return view('traktor');
});

Route::get('/prives', function () {
    return view('prives');
});

Route::get('/terminy', function () {
    return view('terminy');
});

Route::get('/kontakty', function () {
    return view('kontakty');
});
Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/subscribe', [SubscriberController::class, 'store']);

Route::post('/payments', [PaymentController::class, 'processPayment']);

Route::post('/messages', [MessageController::class, 'store']);

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
