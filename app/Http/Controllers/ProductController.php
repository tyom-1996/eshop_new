<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoryProduct;
use App\Product;
use App\ProductImage;
use App\Tags;


class ProductController extends Controller
{
    // <= ======================== Products by category pages ======================== =>
	public function products_by_category_and_tag($category, $tag)
    {
    	$cat_id = CategoryProduct::where('name', preg_replace('/\_+/', ' ', $category))
    								->first();
        $tag_id = Tags::where('name', preg_replace('/\_+/', ' ', $tag))
                        ->first('id');

    	if (!empty($cat_id) && !empty($tag_id)) 
    	{
	    	$products = Product::where('status', 'publish')
	    						->where('cat_id', $cat_id->id)
	    						->orderBy('created_at', 'DESC')
	    						->get();
                                // dd($products);
	    	return view('catalog', compact('products'));
    	}
    	else
    		return view('errors.404');
    }
    


    // <= ======================== Products by category pages ======================== =>
    public function item_product_view($product_id)
    {
        $item_product = Product::where('id', $product_id)
                                ->where('status', 'publish')
                                ->first();

        $products = Product::where('status', 'publish')
                                ->where('cat_id', $item_product->cat_id)
                                ->limit(4)
                                ->get();

        $new_products = Product::where('status', 'publish')
                                ->where('cat_id', '<>', $item_product->cat_id)
                                ->orderBy('created_at', 'DESC')
                                ->limit(4)
                                ->get();

        // $cat

        return view('item_product_view', compact('item_product'), compact('products'))->with('new_products', $new_products);
    }
}
