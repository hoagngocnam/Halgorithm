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

Route::name('user.')->group(function () {
    Route::withoutMiddleware(['authenticate:admin'])->name('authenticate.')->group(function () {
        Route::match(['get', 'post'], 'login', 'AuthenticateController@login')->name('login');
        Route::match(['get', 'post'], 'register', 'AuthenticateController@register')->name('register');
        Route::get('logout', 'AuthenticateController@logout')->name('logout');
    });

    Route::get('', 'HomeController@index')->name('users.home');

    Route::get('shop/{shop_id}', 'ShopController@index')->name('users.shop');

    Route::get('{category_id}', 'CategoryController@index')->name('users.category')->whereNumber(['category_id']);

    Route::get('{category_id}/{product_id}',
        'ProductController@index')->name('users.product')->whereNumber('category_id')->whereNumber('product_id');

    Route::get('cart', 'CartController@index')->name('users.cart');

    Route::get('create-payment', 'CartController@create')->name('users.create-payment');

    Route::get('return-vnpay', 'CartController@returnVnpay')->name('users.return-vnpay');

// Route::get('cart/success', 'CartController@success')->name('users.cart.success');

    Route::get('cart/paygate/1', 'CartController@paygate')->name('users.cart.paygate');

    Route::name('users.')->group(function () {
        Route::get('{category_id}/{product_id}', 'ProductController@index')->name('product');
    });

});
