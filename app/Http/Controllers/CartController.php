<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Cart;
use App\Product;
use App\ProductImage;

class CartController extends Controller
{
    // <= ======================== Cart page ======================== =>
    public function cart()
    {
        $product = Cart::where('user_id', 1)->get();
    	return view('basket',["product"=>$product]);
    }



    // <= ======================== Add product to cart ======================== =>
    public function product_item_add(Request $request)
    {
        if (!empty($request)) 
        {
            $add_to_cart = new Cart;
            $add_to_cart->user_id = '1';
            $add_to_cart->product_id = $request->id;
            $add_to_cart->save();

            return true;
        }
        else
            return false;
    	
    }


}
