<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;


class ManagerController extends Controller
{
    public function index()
    {
    	$products = Product::where('status', 'publish')->orderBy('created_at', 'DESC')->limit(8)->get();
    	return view('main')->with('products', $products);
    }
}
