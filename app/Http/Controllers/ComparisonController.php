<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ComparisonController extends Controller
{
    public function comparison()
    {
    	return view('comparison');
    }
}
