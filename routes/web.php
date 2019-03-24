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
    return view('home');
});

Route::get('/warehouses', 'WarehouseController@index');
Route::get('/warehouses/add', 'WarehouseController@add');
Route::post('/warehouses/create', 'WarehouseController@create');
Route::post('/warehouses/delete/{id}', 'WarehouseController@delete');
Route::get('/warehouses/{id}', 'WarehouseController@edit');
Route::post('/warehouses/update', 'WarehouseController@update');

Route::get('/products', 'ProductController@index');

Route::get('/products/{id}', function () {
    return view('product');
});
