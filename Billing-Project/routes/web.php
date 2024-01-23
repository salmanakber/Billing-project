<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\registerController;
use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\Auth\forgotPassController;
use App\Http\Controllers\Auth\resetCodeController;
use App\Http\Controllers\Auth\logoutController;
use App\Http\Controllers\pricingController;

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
    return view('welcome');
})->name('dashboard');

// Auths Routes 
Route::get('/register', [registerController::class, 'register_view'])->name('register');
Route::post('/get-register', [registerController::class, 'register'])->name('get-register');

Route::get('/login', [loginController::class, 'login_view'])->name('login');
Route::post('/get-login', [loginController::class, 'login'])->name('get-login');
Route::get('/logout', [logoutController::class, 'logout'])->name('logout');

Route::get('/forgot-pass', [forgotPassController::class, 'forgot_pass_veiw'])->name('forgot-pass');
Route::post('/reset-pass', [forgotPassController::class, 'reset_pass'])->name('reset-pass');

Route::get('/reset-code', [resetCodeController::class, 'reset_code'])->name('reset-code');
Route::post('/reset-save-code', [resetCodeController::class, 'reset_save_code'])->name('reset-save-code');


Route::prefix('/pricing')->group(function(){
    Route::get('/',[pricingController::class, 'pricing'])->name('pricing');
});
