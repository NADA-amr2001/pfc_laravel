<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
//use App\Http\Controllers\ProductController;
use App\models\Product;
use App\models\Category;

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

// Route::get('/medicines/:id', function ($id) {
//     return $id;
//     $category = Category::findOrfail($id);
//     return view('products')->with([
//         "products" => $category->products()->paginate(10),
//         "categories" =>Category::has("products")->get(),
//     ]);
// });
// /*Route::get('/medicines', function () {
//     return view('medicines');
// });*/

// Route::get('/food', function () {
//     return view('food');
// });
// Route::get('/equipements', function () {
//     return view('equipements');
// });
//login logout register routes
Auth::routes();
//home routes
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//activate user account routes
Route::get('/activate/{code}', [App\Http\Controllers\ActivationController::class, 'activateUserAccount'])->name('user.activate');
Route::get('/resend/{email}', [App\Http\Controllers\ActivationController::class, 'resendActivationCode'])->name('code.resend');
//Route::resource('/categories', App\Http\Controllers\CategoryController::class);
Route::get('/categories/{id}', function($id){
    $category = Category::findOrfail($id);

    return view('products')->with([
        "products" => $category->products()->paginate(10),
        "categories" =>Category::has("products")->get(),
    ]);
});

//Route::get('products/category/{category}',[App\Http\Controllers\ProductController::class, 'getProductByCategory'])->("category.products");
Route::get('/show', [App\Http\Controllers\ProductController::class, 'show'])->name('products.show');

//search
//  Route::get('/search','ProductController@search')->name('products.search');
Route::get('/search', [App\Http\Controllers\ProductController::class, 'search'])->name('products.search');
//Route::get('/search', [ProductController::class, 'search'])->name('products.search');

//cart routes
Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart.index');
Route::post('/add/cart/{product}', [App\Http\Controllers\CartController::class, 'addProductToCart'])->name('add.cart');
Route::delete('/remove/{product}/cart', [App\Http\Controllers\CartController::class, 'removeProductFromCart'])->name('remove.cart');
Route::put('/update/{product}/cart', [App\Http\Controllers\CartController::class, 'updateProductOnCart'])->name('update.cart');

//admin routes
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'showAdminLoginForm'])->name('admin.login');
Route::post('/admin', [App\Http\Controllers\AdminController::class, 'adminLogin'])->name('admin.login');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'adminLogout'])->name('admin.logout');

/*Route::get('/admin', 'AdminController@index')->name('admin.index');
Route::get('/admin/login', 'AdminController@showAdminLoginForm')->name('admin.login');
Route::post('/admin/login', 'AdminController@adminLogin')->name('admin.login');
Route::get('/admin/logout', 'AdminController@adminLogout')->name('admin.logout');*/

/*Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin', [AdminController::class, 'showAdminLoginForm']);
Route::get('/admin', [AdminController::class, 'adminLogin']);
Route::get('/admin', [AdminController::class, 'adminLogout']);*/


Route::resource('/user', App\Http\Controllers\UserController::class);
