<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/product', [App\Http\Controllers\ProductController::class, 'viewProduct']) 
->name('product');

Route::post('/product', [App\Http\Controllers\ProductController::class, 'searchProduct']) 
->name('search.products');

Route::get('/productDetail/{id}', [App\Http\Controllers\ProductController::class, 'productdetail']) 
->name('product.detail');

Route::post('addCart',[App\Http\Controllers\CartController::class,'add'])
->name('add.to.cart');

Route::get('/myCart',[App\Http\Controllers\CartController::class, 'view'])
->name('myCart');

Route::post('\checkout', [App\Http\Controllers\PaymentController::class, 'paymentPost'])
->name('payment.post');


// xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx

Route::middleware('auth','isAdmin')->group(function () { 

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    //Category

    Route::get('/addCategory', function () {
        return view('admin.addCategory');
    });
    
    Route::post('/addCategory/store', [App\Http\Controllers\CategoryController::class, 'add']) 
    ->name('addCategory');
    
    Route::get('/viewCategory', [App\Http\Controllers\CategoryController::class, 'view']) 
    ->name('viewCategory');

    Route::get('/editCategory/{id}', [App\Http\Controllers\CategoryController::class, 'edit']) 
->name('editCategory');

Route::post('/updateCategory', [App\Http\Controllers\CategoryController::class, 'update']) 
->name('updateCategory');

//end category

//Product

Route::get('/addProduct', function () {
    return view('admin.addProduct',['categoryID'=>App\Models\Category::all()]);

});

Route::post('/addProduct/store', [App\Http\Controllers\ProductController::class, 'add']) 
->name('addProduct');//form {{route('addProduct')}}

Route::get('/viewProduct', [App\Http\Controllers\ProductController::class, 'view']) 
->name('viewProduct');

Route::get('/editProduct/{id}', [App\Http\Controllers\ProductController::class, 'edit']) 
->name('editProduct');

Route::post('/updateProduct', [App\Http\Controllers\ProductController::class, 'update']) 
->name('updateProduct');

Route::get('/deleteProduct/{id}', [App\Http\Controllers\ProductController::class, 'delete']) 
->name('deleteProduct');

//end product
});
