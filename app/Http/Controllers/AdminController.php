<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Validator;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    public function add(){

        return view('admin.add');
    }

    public function create(Request $req){

        $validator = Validator::make($req->all(), [

            "name"      => "required",
            "quantity"     => "required",
            "preference"     => "required",
            "category"     => "required",
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
        $product->preference = $req->preference;
        $product->category = $req->category;
        $product->price = $req->price;
        $product->save();

        return redirect()->Route('admin.productList');
    }

    public function details($id){

        $std = Product::find($id);

        return view('admin.details', ['std'=>$std]);
    }

    public function show(){

        $std = Product::all();
        return view('admin.productList', ['std'=> $std]);
    }

    public function edit($id){

        $std = Product::find($id);
        return view('admin.edit', ['std'=>$std]);
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
        $product->preference = $req->preference;
        $product->category = $req->category;
        $product->price = $req->price;
        $product->save();

        return redirect()->route('admin.productList');
    }
    public function delete($id){

        $std = Product::find($id);
        return view('admin.delete', ['std'=>$std]);
    }

    public function destroy($id){

        Product::destroy($id);
        return redirect()->route('admin.productList');
    }

}
