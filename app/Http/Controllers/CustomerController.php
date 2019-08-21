<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Product;
use App\User;
use App\Cart;
use Validator;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{

    public function details($id){

        $std = Product::find($id);

        return view('customer.details', ['std'=>$std]);
    }

    public function show(){

        $productList = Product::all();
        return view('customer.productList', ['productList'=> $productList]);
    }

    public function cart(){

        $cartList = Cart::where('username', session('user'))->orderby('id')->get();
        return view('customer.cart', ['cartList'=> $cartList]);
    }

    public function insert($id){

        $product = Product::where('id', $id)->first();

        $cartList = new Cart();
        $cartList->username = session('user');
        $cartList->category = $product->category;
        $cartList->price = $product->price;
        $cartList->save();

        $productList = Product::all();

        return view('customer.productList', ['productList'=> $productList]);
    }

    public function deleteCart($id){

        $std = Cart::find($id);

        return view('customer.delete', ['std'=>$std]);
    }

    public function destroy($id) {

        Cart::destroy($id);

        $cartList = Cart::where('username', session('user'))->orderby('id')->get();

        return view('customer.cart', ['cartList'=> $cartList]);
    }

    public function category(){

        $categoryList = Product::all();

        return view('customer.category', ['categoryList'=> $categoryList]);
    }

    public function byCategory($id){

        $productList = Product::where('category', $id)->get();
        return view('customer.byCategory', ['productList'=> $productList]);
    }

    public function maleProduct(){

        $productList = Product::where('preference', 'male')
                                ->get();
        return view('customer.maleProductList', ['productList'=> $productList]);
    }

    public function femaleProduct(){

        $productList = Product::where('preference', 'female')
                                ->get();
        return view('customer.femaleProductList', ['productList'=> $productList]);
    }

}
