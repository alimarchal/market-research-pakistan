<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ProfileController;
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
    return view('welcome');
})->name('home');

Route::get('/terms', function () {
    return view('terms');
})->name('terms');

Route::get('/careers', function () {
    return view('auth.c_register');
})->name('c_register');

Route::get('/services', function () {
//Route::get('/services', function (\Illuminate\Http\Request $request) {
//    $scroll = true;
//    $value = $request->scroll;
//    return view('services', compact('scroll', 'value'));
    return view('services');
})->name('services');

Route::middleware(['auth', 'verified',])->group(function () {

    Route::prefix('admin')->middleware('admin')->group(function (){
        Route::get('/', [AdminController::class, 'index'])->name('admin.index');
        Route::get('/users', [AdminController::class, 'users'])->name('admin.users');
        Route::get('/profile/update', [AdminController::class, 'profile'])->name('admin.profile');
        Route::post('/profile/update', [AdminController::class, 'update']);
        Route::post('/update/status', [AdminController::class, 'status_update'])->name('update.query.status');
        Route::get('/user/details/{id}', [AdminController::class, 'user_details'])->name('user_details');
    });

    Route::get('/forms', [FormController::class, 'index'])->name('index');
    Route::get('/form', [FormController::class, 'create'])->name('create');
    Route::post('/form', [FormController::class, 'save']);
    Route::get('/profile/update', [ProfileController::class, 'index'])->name('profile');
    Route::post('/profile/update', [ProfileController::class, 'update']);
});

