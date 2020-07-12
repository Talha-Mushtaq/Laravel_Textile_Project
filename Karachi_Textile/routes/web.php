<?php

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

// Route::get('/', function () {
//     return ("home page");
// });

Auth::routes();


// user page routing
Route::get('/','User\UserPageRoutingController@home');
Route::get('/who-we-are','User\UserPageRoutingController@whoWeAre');
// Route::get('/Shop-sidebar','User\UserPageRoutingController@products');
Route::get('/Machinery-units','User\UserPageRoutingController@industryUnits');
Route::get('/Production','User\UserPageRoutingController@dailyProduction');
Route::get('/Outlet','User\UserPageRoutingController@outlet');
Route::get('/Contact','User\UserPageRoutingController@contact');
// Route::get('/ProductSinglePage','User\UserPageRoutingController@productSinglePage');
// Route::get('/Cart','User\UserPageRoutingController@cart');
// Route::get('/CheckOut','User\UserPageRoutingController@checkOut');
// Route::get('/PurchaseConfirmation','User\UserPageRoutingController@purchaseConfirmation');

//admin page routing
Route::get('/Admin','Admin\AdminPageRoutingController@dashboard');
Route::get('/Admin/Login','Admin\AdminPageRoutingController@login');
// Route::get('/Admin/Products','Admin\AdminPageRoutingController@products');
Route::get('/Admin/AddProduct','Admin\AdminPageRoutingController@addProduct');
Route::get('/Admin/EditProduct/{id?}/{title?}/{category?}/{price?}/{image?}/{detail?}','Admin\AdminPageRoutingController@editProduct');
// Route::get('/Admin/SearchProduct','Admin\AdminPageRoutingController@searchProduct');
// Route::get('/Admin/Orders','Admin\AdminPageRoutingController@orders');
// Route::get('/Admin/Messages','Admin\AdminPageRoutingController@messages');

//admin crud data
Route::post('/Admin/saveProduct','Admin\ProductController@saveProduct');
Route::get('/Admin/Products','Admin\ProductController@showProduct');
Route::post('/Admin/UpdateProduct/{id?}','Admin\ProductController@updateProduct');
Route::get('/Admin/DeleteProduct/{id?}','Admin\ProductController@deleteProduct');
// Route::post('/Admin/searchProduct','Admin\ProductController@searchProduct');

//user

Route::get('/Shop-sidebar','User\UserController@sidebarProduct');
Route::get('/ProductSinglePage/{id?}','User\UserController@productSinglePage');
// Route::get('/AddTOCart/{product}','User\UserController@addToCart')->name('cart.add')->middleware('auth');
// Route::get('/AddTOCart','User\UserController@addToCart');