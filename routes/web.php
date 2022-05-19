<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});
Route::get('home', function () {
    return view('home');
});

route::get('user', 'PegawaiController@index');
route::get('user/p/{any}', 'PegawaiController@detail');
route::get('user/register', 'PegawaiController@register');

//admin group route by namespace 'admin'
Route::group(["namespace"=>"admin"], function (){
    Route::get('/admin/religion', 'ReligionController@index');
    Route::get('/admin/bank', 'BankController@index');
    Route::get('/admin/departemen', 'DepartmenController@index');
    Route::get('/admin/position', 'PositionController@index');
    Route::get('/admin/product', 'ProductController@index');
    Route::get('/admin/product/register', 'ProductController@register');
    Route::get('/admin/product/{any}', 'ProductController@detail/$1');
});