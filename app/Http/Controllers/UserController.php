<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Users_site;
use Redirect;


class UserController extends Controller
{
    public function sign_in()
    {
    	return view('users.sign_in');
    }
    
    public function sign_up()
    {
    	return view('users.sign_up');
    }

    public function register(Request $request)
    {
    	// dump($request);
    	$validator = Validator::make(
		   $request->all(),
		    array(
		        'surname' => 'required|alpha_dash|string|min:3|max:12',
		        'name'    => 'required|alpha_dash|string|min:3|max:12',
		        'email'   => 'required|email',
		        'tel'     => 'required|integer'
		    )
		    // ,
		    // array(
		    // 	'name.required' => 'datark',
		    // 	'email' => 'address error'
		    // )
		);

 		$user = Users_site::where('email', $request->email)->first();
		$validator->after(function($validator) use($user){
			if ($user) {
				$validator->errors()->add('email', 'urish mail');		
			}
		});

		if ($validator->fails()) {
			// Переданные данные не прошли проверку
			return Redirect::back()->withInput()->withErrors($validator);
		}else {
			$gen_password   = Str::random(10);
			$user           = new Users_site();
			$user->name     = $request->name;
			$user->surname  = $request->surname;
			$user->email    = $request->email;
			$user->tel      = $request->tel;
			$user->password = Hash::make($gen_password);
			$user->save();

			$send = array('name' => $user->name, 'surname' => $user->surname, 'surname' => $gen_password);
			Mail::send('mails.send_password', $send, function($m) use($user){
				$m->from(env('MAIL_USERNAME'), 'Password');
				$m->to($user->email, "$user->name $gen_password $user->surname")
					->subject('Password');
			});
			return Redirect::to('/sign_in');
		}
    }
}
