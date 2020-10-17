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

Route::get("/cart","CartController@cart");
Route::post("/cart","CartController@cart_add");
Route::get("/comparison","ComparisonController@comparison");
Route::get("/personal_area","ProfilController@profile");
Route::get("/order_history","OrderHistoryController@order_history");
Route::get("/personal-password","PersonaPasswordController@repeat_password");
Route::get("/my-favorites","MyFavoritesController@Myfavorites");

Route::get("/computers","ProductController@MyProductComputers");
Route::get("/laptop","ProductController@MyProductLaptop");
Route::get("/accessories","ProductController@MyProductAccessories");
Route::get("/catalog/{cat_id}","ProductController@MyProductPeripherals");

// Route::get("/service_center","ProductController@MyProductService_center");







