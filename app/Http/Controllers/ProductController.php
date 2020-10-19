<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoryProduct;
use App\Product;
use App\ProductImage;
use App\Slider;


class ProductController extends Controller
{

	public function products_show_by_category($name)
    {
    	$cat_id   = CategoryProduct::where('name', preg_replace('/\_+/', ' ', $name))
    								->first('id');
    	if (!empty($cat_id)) 
    	{
	    	$products = Product::where('status', 'publish')
	    						->where('cat_id', $cat_id->id)
	    						->orderBy('created_at', 'DESC')
	    						->get();
	    	return view('catalog', compact('products'));
    	}
    	else
    		return view('errors.404');
    }
    // public function MyProductComputers()
    // {

    // 	$computers = Product::where('cat_id','=','1')->get();

    // 	return view('catalog',["computers"=>$computers]);
    // }



    // public function MyProductLaptop()
    // {

    // 	$Laptop = Product::where('cat_id','=','2')->get();

    // 	return view('catalog',["Laptop"=>$Laptop]);
    // }



    // public function MyProductAccessories()
    // {
    // 	$accessories = Product::where('cat_id','=','3')->get();

    // 	return view('catalog',["accessories"=>$accessories]);
    // }



    //  public function MyProductPeripherals($cat_id)
    // {
    // 	$peripherals = Product::where('cat_id','=',$cat_id)->get();

    // 	return view('catalog',["data"=>$peripherals]);
    // }




    //  public function MyProductService_center()
    // {
    // 	return view('catalog');
    // }



}
