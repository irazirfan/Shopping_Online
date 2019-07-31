<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;



class LoginController extends Controller
{

	public function login(){

		return view('login/login');
	}

	public function verify(Request $req){

		$validator = Validator::make($req->all(), [

            "username"     => "required",
            "password"  => "required"

        ]);

        if($validator->fails()){

            return back()
                    ->with('errors', $validator->errors())
                    ->withInput();
        }

        else{
        	$result = User::where('username', $req->username)
        			->where('password', $req->password)
        			->get();

			if(count($result) > 0){

				$req->session()->put('user', $req->username);
				return redirect()->route('home.index');
			}else{
				$req->session()->flash('msg', 'invalid username or password');
				return redirect()->route('login');
			}

        }
    }
}
