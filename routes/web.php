<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('index');
});

// Route::get('login', function () {
//     return view('auth.user.login');
// })->name("login");

Route::get('sign-in-google', [UserController::class,'google'])->name('user.login.google');

Route::get('dashboard', function () {
    return view('user.dashboard');
})->name("dashboard");

Route::get('checkout/succes', function () {
    return view('checkout.succes');
});

Route::get('checkout/{camp}', function () {
    return view('checkout.create');
});

require __DIR__.'/auth.php';
