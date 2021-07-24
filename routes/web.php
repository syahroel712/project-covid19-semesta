<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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
// admin
Route::prefix('covid-admin')->group(function () {

    Route::middleware(['belum_login'])->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('/');
        Route::post('/aksilogin', [AdminController::class, 'loginAdmin'])->name('aksilogin');
        Route::get('/register', [AdminController::class, 'register'])->name('register');
        Route::post('/aksiregister', [AdminController::class, 'registerAdmin'])->name('aksiregister');
    });
    
    Route::middleware(['sudah_login'])->group(function () {
        // home
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::get('logout', [AdminController::class, 'logout'])->name('logout');

        // user
        Route::get('user', [UserController::class, 'index'])->name('user');
        Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
        Route::post('/user', [UserController::class, 'store'])->name('user.store');
        Route::get('/user/{user}', [UserController::class, 'edit'])->name('user.edit');
        Route::put('/user/{user}', [UserController::class, 'update'])->name('user.update');
        Route::delete('/user/{user}', [UserController::class, 'destroy'])->name('user.delete');
    });
});





// frontend
Route::get('/', [HomeController::class, 'index'])->name('/');
Route::get('/statistik', [HomeController::class, 'listStatistik'])->name('statistik');
Route::get('/rumah-sakit-rujukan', [HomeController::class, 'listRumahSakit'])->name('rumahsakit');
Route::get('/registrasi-vaksin', [HomeController::class, 'listRegistrasi'])->name('registrasi');


// aksi register
Route::post('/aksi-registrasi-vaksin', [RegisterController::class, 'registrasi'])->name('aksiregistrasi');