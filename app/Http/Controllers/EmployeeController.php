<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Validator;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{

    public function add(){

        return view('employee.add');
    }

    public function create(Request $req){

        $validator = Validator::make($req->all(), [

            "name"      => "required",
            "quantity"     => "required",
            "price"     => "required",
        ]);

        if($validator->fails()){

            return back()
                ->with('errors', $validator->errors())
                ->withInput();
        }

        $product = new Product();
        $product->name = $req->name;
        $product->quantity = $req->quantity;
        $product->price = $req->price;
        $product->save();

        return redirect()->Route('employee.productList');
    }

    public function details($id){

        $std = Product::find($id);

        return view('employee.details', ['std'=>$std]);
    }

    public function show(){

        $productList = Product::all();
        return view('employee.productList', ['std'=> $productList]);
    }

    public function edit($id){

        $std = Product::find($id);
        return view('employee.edit', ['std'=>$std]);
    }

    public function update(Request $req, $id){

        $validator = Validator::make($req->all(), [

            "name"      => "required",
            "quantity"     => "required",
            "price"     => "required",
        ]);

        if($validator->fails()){

            return back()
                ->with('errors', $validator->errors())
                ->withInput();
        }
        $product = Product::find($id);
        $product->name = $req->name;
        $product->quantity = $req->quantity;
        $product->price = $req->price;
        $product->save();

        return redirect()->route('employee.productList');
    }
    public function delete($id){

        $std = Product::find($id);
        return view('employee.delete', ['std'=>$std]);
    }

    public function destroy($id){

        Product::destroy($id);
        return redirect()->route('employee.productList');
    }

}
