<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonaPasswordController extends Controller
{
    public function repeat_password()
    {
    	return view('personal-password');
    }
}
