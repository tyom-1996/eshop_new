<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Cart;
use App\Product;
use App\ProductImage;

class CartController extends Controller
{
    public function cart()
    {
    	$user_id = 1;

    	$product_cat = Cart::where('user_id','=',$user_id)->first();


    	$product = Product::where('id','=',$product_cat->product_id)->get();

    	

    	return view('basket',["product"=>$product]);
    }


    public function cart_add(Request $request)
    {

    	$cart = Cart::create([
    		'user_id'    => '1',
    		'product_id' => $request->id
    	]);

    	$cart->save();


    }


}
