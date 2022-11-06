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
    return view('layout');
});

Route::get('/product/{id}',function($id){
$product = getProduct($id);
return view('product', ['product' => $product]);
});

Route::get('/products', function(){
$products = getProducts();
return view('products', ['products' => $products]);
});

function getProduct($id){
if($id==1) return array("id"=>1, "name"=>"Classic Jam", "price"=>5.99);
if($id==2) return array("id"=>2, "name"=>"Rock", "price"=>3.99);
}

function getProducts(){
$products = [];
$product[] = array("id"=>1, "name"=>"Classic Jam", "price"=>5.99);
$products[] = array("id"=>2, "name"=>"Rock", "price"=>3.99);
}
