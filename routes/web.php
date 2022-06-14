<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
//use App\Http\Controllers\ProductController;
use App\models\Product;
use App\models\Category;
use App\Http\Controllers\ContactController;

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




//seller
Route::resource('products', App\Http\Controllers\ProductController::class);
Route::resource('categories', App\Http\Controllers\CategoryController::class);

Route::put('/products/{id}', [App\Http\Controllers\ProductController::class, 'update'])->name('products.update');
//Route::get('products/category/{category}',[App\Http\Controllers\ProductController::class, 'getProductByCategory'])->("category.products");
// Route::get('/show', [App\Http\Controllers\ProductController::class, 'show'])->name('products.show');

//Route::delete('products/{id}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('products.destroy');

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
Route::get('/admin/login', [App\Http\Controllers\AdminController::class, 'showAdminLoginForm'])->name('admin.show.login');
Route::post('/admin/login', [App\Http\Controllers\AdminController::class, 'adminLogin'])->name('admin.login');
Route::post('/admin/logout', [App\Http\Controllers\AdminController::class, 'adminLogout'])->name('admin.logout');
Route::get('/admin/products', [App\Http\Controllers\AdminController::class, 'getProducts'])->name('admin.products');
Route::get('/admin/orders', [App\Http\Controllers\AdminController::class, 'getOrders'])->name('admin.orders');
Route::get('/admin/users', [App\Http\Controllers\AdminController::class, 'getUsers'])->name('admin.users');
// Route::delete('/admin/orders', [App\Http\Controllers\AdminController::class, 'destroy'])->name('orders.destroy');
//Route::post('/admin/products/{id}', [App\Http\Controllers\AdminProductController::class, 'update'])->name('admin.products.update');
Route::delete('/admin/products/{id}', [App\Http\Controllers\AdminProductController::class, 'destroy'])->name('admin.products.destroy');
Route::get('/admin/products/{id}/edit', [App\Http\Controllers\AdminProductController::class, 'edit'])->name('admin.products.edit');
Route::put('/admin/products/{id}', [App\Http\Controllers\AdminProductController::class, 'update'])->name('admin.products.update');
Route::get('/admin/products/create', [App\Http\Controllers\AdminProductController::class, 'create'])->name('admin.products.create');
Route::post('/admin/products/create', [App\Http\Controllers\AdminProductController::class, 'store'])->name('admin.products.store');
Route::get('/admin/products/catg', [App\Http\Controllers\AdminProductController::class, 'catg'])->name('admin.products.catg');
Route::post('/admin/products', [App\Http\Controllers\AdminProductController::class, 'add_catg'])->name('admin.products.add_catg');
//user admin
Route::delete('/admin/users/{id}', [App\Http\Controllers\AdminUserController::class, 'destroy'])->name('admin.users.destroy');

//profile
Route::get('/Profile', [App\Http\Controllers\UserController::class, 'myprofile'])->name('Profile');
Route::get('/myOrder', [App\Http\Controllers\UserController::class, 'showOrders'])->middleware('auth');
Route::get('/myProduct', [App\Http\Controllers\UserController::class, 'showProducts'])->middleware('auth');
Route::put('/Profile/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('Profile.update');
Route::get('/changePassword', [App\Http\Controllers\UserController::class, 'pass'])->name('changePassword');
Route::post('/changePassword', [App\Http\Controllers\UserController::class, 'changePassword'])->name('changePassword');


Route::post('/user/logout', function() {
    auth()->guard('web')->logout();
    return  redirect("/");
})->name("user.logout");

//orders routes
Route::resource('orders', App\Http\Controllers\OrderController::class);
Route::post('/createOrders', [App\Http\Controllers\OrderController::class, 'store'])->middleware('auth');
Route::delete('/admin/orders/{id}', [App\Http\Controllers\OrderController::class, 'destroy'])->name('orders.destroy');

//payment routes
Route::get('/handle-payment',[App\Http\Controllers\PaypalPaymentController::class, 'handlePayment'])->name('make.payment');
Route::get('/cancel-payment',[App\Http\Controllers\PaypalPaymentController::class, 'payementCancel'])->name('cancel.payment');
Route::get('/success-payment',[App\Http\Controllers\PaypalPaymentController::class, 'payementSuccess'])->name('success.payment');
// Route::post('/Paypal', [App\Http\Controllers\PaypalController::class, 'index'])->name('index.paypal');
// Route::get('/Paypal/return', [App\Http\Controllers\PaypalController::class, 'paypalreturn'])->name('return.paypal');
// Route::get('/Paypal/cancel', [App\Http\Controllers\PaypalController::class, 'paypalcancel'])->name('cancel.paypal');

//contact us
Route::get('/contact-us', [ContactController::class, 'index']);
Route::post('/contact-us', [ContactController::class, 'save'])->name('contact.store');

Route::resource('/user', App\Http\Controllers\UserController::class);

Route::get('/login', function () {
    return view('welcome');
})->name('login');
Route::get('/register', function () {
    return view('welcome');
})->name('register');

Route::get('/update_wishlist',[App\Http\Controllers\ProductController::class, 'updatewishlist']);

Route::resource('products_wish', App\Http\Controllers\WishlistController::class);
