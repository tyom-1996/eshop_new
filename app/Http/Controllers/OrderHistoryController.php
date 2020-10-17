<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderHistoryController extends Controller
{
     public function order_history()
    {
    	return view('personal-history');
    }
}
