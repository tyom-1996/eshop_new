<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;

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

// <= ======================== Home page ======================== =>
Route::get('/', 'ManagerController@index');  


// <= ======================== Voyager Admin ======================== =>
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


// <= ======================== Add product to cart ======================== =>
Route::post('/product_item_add', 'CartController@product_item_add');


// <= ======================== Sign up page ======================== =>
Route::get('/sign_up', 'UserController@sign_up')->middleware('checking:login');


// <= ======================== Register checking ======================== =>
Route::post('/register', 'UserController@register');


// <= ======================== Sign in page ======================== =>
Route::get('/sign_in', 'UserController@sign_in')->middleware('checking:login');


// <= ======================== Login checking ======================== =>
Route::post('/log_in', 'UserController@log_in');

// <= ======================== Personal area page ======================== =>
Route::get('/personal_area', 'UserController@personal_area')->middleware('checking:users');


// <= ======================== User edit ======================== =>
Route::post('/user_edit', 'UserController@user_edit')->middleware('checking:users');


// <= ======================== Logout ======================== =>
Route::get('/logout', 'UserController@g_logout');


// <= ======================== Repeat password page ======================== =>
Route::get('/personal_password', 'UserController@personal_password')->middleware('checking:users');


// <= ======================== Repeat password page ======================== =>
Route::post('/repeat_password', 'UserController@repeat_password');


// <= ======================== Products by category pages ======================== =>
Route::get('/category/{category}/{tag}', 'ProductController@products_by_category_and_tag');


// // <= ======================== Products by category and tag pages ======================== =>
// Route::get('/category/{category}/{tag}', 'ProductController@products_by_category_and_tag');


// <= ======================== Item product view page ======================== =>
Route::get('/item_product_view/{product_id}', 'ProductController@item_product_view');


// <= ======================== Cart page ======================== =>
Route::get('/cart', 'CartController@cart')->middleware('checking:users');














// Route::get("/comparison","ComparisonController@comparison");


// Route::get("/order_history","OrderHistoryController@order_history");


Route::get("/my-favorites","MyFavoritesController@Myfavorites");

// Route::get("/computers","ProductController@MyProductComputers");

// Route::get("/laptop","ProductController@MyProductLaptop");

// Route::get("/accessories","ProductController@MyProductAccessories");

// Route::get("/catalog/{cat_id}","ProductController@MyProductPeripherals");

// Route::get("/service_center","ProductController@MyProductService_center");







