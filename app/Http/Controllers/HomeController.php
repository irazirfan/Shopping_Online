<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function register(){

    	return view('home/register');
    }

    public function add(){

        return view('home/add');
    }

    public function signup(Request $req){

        $validator = Validator::make($req->all(), [

            "name"      => "required",
            // "email"     => "required | unique:users,email",
            "username"     => "required",
            "contact"     => "required",
            "password"  => "required|min:4",
            "user_type" => "required"
        ]);

        if($validator->fails()){

            return back()
                    ->with('errors', $validator->errors())
                    ->withInput();
        }

    	$user = new User();
        $user->name = $req->name;
        $user->contact = $req->contact;
    	$user->username = $req->username;
    	$user->password = $req->password;
    	$user->user_type = $req->user_type;
    	$user->save();

    	return view('login.login');
    }

	public function details($id){

		$std = User::find($id);

		return view('home.details', ['std'=>$std]);
    }

    public function show(){

    	$employeeList = User::where('user_type',"employee")
    	                    ->get();
    	return view('home.employeeList', ['std'=> $employeeList]);
    }

	public function edit($id){

		$std = User::find($id);
		return view('home.edit', ['std'=>$std]);
    }

    public function update(Request $req, $id){

    	$user = User::find($id);

    	$user->username = $req->uname;
    	$user->name = $req->name;
    	$user->dept = $req->dept;
    	$user->cgpa = $req->cgpa;
    	$user->save();

		return redirect()->route('home.employeeList');
    }
	public function delete($id){

		$std = User::find($id);
		return view('home.delete', ['std'=>$std]);
    }

    public function destroy($id){

		User::destroy($id);
		return redirect()->route('home.employeeList');
	}

    public function about(){

        return view('home/about');
    }

    public function contact(){

        return view('home/contact');
    }

    public function index(){

        return view('home.index');
    }

    public function getEmail(Request $request)
    {
        if($request->ajax())
        {
            $output="";
            $users=User::where('username','LIKE','%'.$request->search."%")
                        ->get();
            if(sizeof($users) > 0)
            {
                $output = 'true';
            }
            return Response($output);
        }
    }
}
