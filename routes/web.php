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

Route::get('/', 'ManagerController@index');  



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/category/{name}', 'ProductController@products_show_by_category');

Route::get('/cart', 'CartController@cart');
Route::post('/product_item_add', 'CartController@product_item_add');

Route::get('/personal_area', 'UserController@personal_area');

Route::get('/sign_up', 'UserController@sign_up');
Route::post('/register', 'UserController@register');


Route::get('/sign_in', 'UserController@sign_in');
// Route::post('/sign_in', 'UserController@sign_in');





// Route::get("/comparison","ComparisonController@comparison");


// Route::get("/order_history","OrderHistoryController@order_history");

// Route::get("/personal-password","PersonaPasswordController@repeat_password");

Route::get("/my-favorites","MyFavoritesController@Myfavorites");

// Route::get("/computers","ProductController@MyProductComputers");

// Route::get("/laptop","ProductController@MyProductLaptop");

// Route::get("/accessories","ProductController@MyProductAccessories");

// Route::get("/catalog/{cat_id}","ProductController@MyProductPeripherals");

// Route::get("/service_center","ProductController@MyProductService_center");







