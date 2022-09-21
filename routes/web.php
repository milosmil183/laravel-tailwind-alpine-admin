<?php

use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\UpgradeController;
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

Route::get('/', function () {
    return redirect('/dashboard');
});

Route::get('/authorize/callback', function () {
    $user = auth()->guard('sanctum')->user();
    if ($user) {
        auth()->guard('web')->login($user, false);
        return redirect()->route('dashboard');
    } else {
        return redirect()->route('login');
    }
})->middleware(['guest', 'auth.onetime']);

Route::middleware('auth')->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');
    Route::resource('/subscriptions', SubscriptionController::class)
        ->names('subscriptions')
        ->only(['index']);
    Route::view('/profile', 'profile')->name('profile');
    Route::resource('payments', PaymentController::class)
        ->names('payments')
        ->only(['index']);
    Route::resource('upgrades', UpgradeController::class)
        ->names('upgrades')
        ->only(['index']);
    Route::view('/settings', 'settings')->name('settings');
});

require __DIR__ . '/auth.php';
