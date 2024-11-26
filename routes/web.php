<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', function () {
    return view('landing_page');
});


Route::middleware(['auth'])->name('dashboard.')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('index');
});



// Role Admin
Route::middleware(['auth', 'role:admin'])->name('admin.')->group(function () {

});


// Route Auth Guest
Route::middleware(['guest'])->group(function () {
    // Login
    Route::get('/login', [LoginController::class, 'index'])->name('login.index');
    Route::post('/login/store', [LoginController::class, 'store'])->name('login.store');

    // Register
    Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
    Route::post('/register/store', [RegisterController::class, 'store'])->name('register.store');

});
