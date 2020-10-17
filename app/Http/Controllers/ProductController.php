<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;


class ProductController extends Controller
{
    public function MyProductComputers()
    {

    	$computers = Product::where('cat_id','=','1')->get();

    	return view('catalog',["computers"=>$computers]);
    }



    public function MyProductLaptop()
    {

    	$Laptop = Product::where('cat_id','=','2')->get();

    	return view('catalog',["Laptop"=>$Laptop]);
    }



    public function MyProductAccessories()
    {
    	$accessories = Product::where('cat_id','=','3')->get();

    	return view('catalog',["accessories"=>$accessories]);
    }



     public function MyProductPeripherals()
    {
    	$peripherals = Product::where('cat_id','=','4')->get();

    	return view('catalog',["peripherals"=>$peripherals]);
    }




    //  public function MyProductService_center()
    // {
    // 	return view('catalog');
    // }



}
