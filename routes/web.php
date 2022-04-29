<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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
});
Route::get('/medicines', function () {
    return view('medicines');
});
Route::get('/food', function () {
    return view('food');
});
Route::get('/equipements', function () {
    return view('medicines');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//admin routes
Route::get('/admin', 'AdminController@index')->name('admin.index');
Route::get('/admin/login', 'AdminController@showAdminLoginForm')->name('admin.login');
Route::post('/admin/login', 'AdminController@adminLogin')->name('admin.login');
Route::get('/admin/logout', 'AdminController@adminLogout')->name('admin.logout');

/*Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin', [AdminController::class, 'showAdminLoginForm']);
Route::get('/admin', [AdminController::class, 'adminLogin']);
Route::get('/admin', [AdminController::class, 'adminLogout']);*/

