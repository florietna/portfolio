<?php

use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\AdminController;

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
Route::resource('posts', WebController::class);
Route::get('/',[WebController::class,'show1']);
Route::get('/login',[WebController::class,'show2']);
Route::post('/login', 'App\Http\Controllers\Authcontroller@dologin')->name('welcome.login');
Route::get('/logout', 'App\Http\Controllers\Authcontroller@logout')->name('logout');

Route::get('/signin',[WebController::class,'show3']);
Route::post('/signin', 'App\Http\Controllers\WebController@signin')->name('welcome.signin');

// Order Page
Route::get('/order',[OrderController::class,'index'])->name('welcome.command');
Route::post('/order', 'App\Http\Controllers\OrderController@store')->name('order');

// History Page
Route::get('/history', [OrderController::class, 'show'])->name('history');

//profile
Route::get('/profile',[WebController::class,'profile']);
Route::post('/profile','App\Http\Controllers\WebController@modifprofile')->name('profile');


// Admin Dashboard
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/menu/list', [AdminController::class, 'listMenus'])->name('admin.menu.list');

Route::get('/admin/login', function () {
    return view('admin.login');
})->name('admin.login');


Route::get('/about',[WebController::class,'about']);
