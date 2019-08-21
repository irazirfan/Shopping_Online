<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/search', 'HomeController@getEmail');

//Route::get('/', 'HomeController@index')->name('home');
Route::get('/login', 'LoginController@login')->name('login');
Route::post('/login', ['uses'=>'LoginController@verify']);
Route::get('/register', 'HomeController@register')->name('register');
Route::post('/register', 'HomeController@signup')->name('signup');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/about', 'HomeController@about')->name('about');

Route::group(['middleware'=>['authorize']], function(){

    Route::get('/home', 'HomeController@index')->name('home.index');
    Route::post('/add', 'HomeController@signup')->name('signup');
    Route::get('/logout', 'LogoutController@index')->name('logout.index');
    Route::get('/profile', 'HomeController@profile')->name('editProfile');
    Route::post('/profile', 'HomeController@updateProfile');
    Route::get('/ProductList', 'CustomerController@show')->name('customer.productList');
    Route::get('/ProductDetails/{sid}', 'CustomerController@details')->name('customer.details');
    Route::get('/cart', 'CustomerController@cart')->name('customer.cart');
    Route::get('/cart/{sid}', 'CustomerController@insert');
    Route::get('/productByCategory', 'CustomerController@category')->name('customer.category');
    Route::get('/maleProduct', 'CustomerController@maleProduct')->name('customer.maleProductList');
    Route::get('/femaleProduct', 'CustomerController@femaleProduct')->name('customer.femaleProductList');
    Route::get('/deleteCart/{sid}', 'CustomerController@deleteCart')->name('customer.delete');
    Route::post('/deleteCart/{sid}', 'CustomerController@destroy')->name('customer.delete');
    Route::get('/byCategory/{id}', 'CustomerController@byCategory')->name('customer.byCategory');


    Route::group(['middleware'=>['role']], function(){
        Route::get('/add', 'HomeController@add');
        Route::post('/add', 'HomeController@create');
        Route::get('/employeeList', 'HomeController@show')->name('home.adminList');
        Route::get('/edit/{sid}', 'HomeController@edit');
        Route::post('/edit/{sid}', 'HomeController@update');
        Route::get('/details/{sid}', 'HomeController@details')->name('home.details');
        Route::get('/delete/{sid}', 'HomeController@delete');
        Route::post('/delete/{sid}', 'HomeController@destroy');

        Route::get('/addProduct', 'AdminController@add')->name('admin.add');
        Route::post('/addProduct', 'AdminController@create');
        Route::get('/productList', 'AdminController@show')->name('admin.productList');
        Route::get('/editProduct/{sid}', 'AdminController@edit');
        Route::post('/editProduct/{sid}', 'AdminController@update');
        Route::get('/productDetails/{sid}', 'AdminController@details')->name('admin.details');
        Route::get('/deleteProduct/{sid}', 'AdminController@delete');
        Route::post('/deleteProduct/{sid}', 'AdminController@destroy');
    });

});
