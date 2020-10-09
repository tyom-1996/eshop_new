<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductImage;
use App\Slider;

class ManagerController extends Controller
{

    public function index()
    {
    	$products = Product::where('status', 'publish')->orderBy('created_at', 'DESC')->limit(8)->get();
    	$slider = Slider::get();
    	return view('main', compact('products'), compact('slider'));
    }
}
