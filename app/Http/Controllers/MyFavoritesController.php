<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyFavoritesController extends Controller
{
     public function Myfavorites()
    {
    	return view('favorites');
    }
}
