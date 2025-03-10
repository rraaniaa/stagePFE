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
    return view('welcome');
});

Route::get('/order', function () {
    return view('client.orderConfirmation');
});



Route::get('/checkout', function () {
    return view('client.productCheckout');
});


Route::get('/category', function () {
    return view('client.shopcategory');
});


Route::get('/cp', function () {
    return view('client.shopcategory');
});


Route::get('/cart', function () {
    return view('client.shoppingCart');
});


Route::get('/shop-single', function () {
    return view('client.shopSingle');
});


Route::get('/dash', function () {
    return view('vendeur.dash');
});


Route::get('/milestone', function () {
    return view('vendeur.milestone');
});

Route::get('/List-produit', function (){
    return view('vendeur.product.listProduct');
});


Route::get('/add-product' , function(){
return view("vendeur.product.addProduct");

});







Route::get('/edit-Product', function(){

return view("vendeur.product.editProduct");

});


Route::get('/pdf', function(){

return view("pdfViewer");

});




