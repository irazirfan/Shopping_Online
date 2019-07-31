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

    Route::group(['middleware'=>['role']], function(){
        Route::get('/add', 'HomeController@add');
        Route::post('/add', 'HomeController@create');
        Route::get('/employeeList', 'HomeController@show')->name('home.employeeList');
        Route::get('/edit/{sid}', 'HomeController@edit');
        Route::post('/edit/{sid}', 'HomeController@update');
        Route::get('/details/{sid}', 'HomeController@details')->name('home.details');
        Route::get('/delete/{sid}', 'HomeController@delete');
        Route::post('/delete/{sid}', 'HomeController@destroy');
    });

});
