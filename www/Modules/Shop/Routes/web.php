<?php

use Illuminate\Support\Facades\Route;

Route::prefix('stores')->middleware(['authenticate:stores', 'handle_breadcrumb', 'notification_message'])->name('stores.')->group(function () {
    // Authentication screen
    Route::withoutMiddleware(['authenticate:stores'])->name('authenticate.')->group(function () {
        Route::match(['get', 'post'], 'login', 'AuthenticateController@login')->name('login');
        Route::match(['get', 'post'], 'register', 'AuthenticateController@register')->name('register');
        Route::get('logout', 'AuthenticateController@logout')->name('logout');
    });

    // DashBoard screen
    Route::get('', 'DashboardController@index')->name('dashboard');

    // Màn hình Product
    Route::prefix('product')->name('product.')->group(function () {
        Route::get('', 'ProductController@index')->name('index');
        Route::match(['get', 'post'], 'add', 'ProductController@add')->name('add');
        Route::match(['get', 'post'], '{product_id}/update', 'ProductController@update')->name('update');
        Route::get('{product_id}/delete', 'ProductController@delete')->name('delete');
    });
});
