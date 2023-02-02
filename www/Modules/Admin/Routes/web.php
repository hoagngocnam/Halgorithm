<?php

use App\Models\Account;
use Illuminate\Support\Facades\Artisan;
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


Route::prefix('admin')->middleware([
//    'authenticate:admin',
    'view_data',
    'handle_breadcrumb',
    'notification_message'
])->name('admin.')->group(function () {
    // Màn hình Authentication
    Route::withoutMiddleware(['authenticate:admin'])->name('authenticate.')->group(function () {
        Route::match(['get', 'post'], 'login', 'AuthenticateController@login')->name('login');
        Route::match(['get', 'post'], 'register', 'AuthenticateController@register')->name('register');
        Route::get('logout', 'AuthenticateController@logout')->name('logout');
    });

    // Màn hình DashBoard
    Route::get('', 'DashboardController@index')->name('dashboard');

    // Màn hình Account
    Route::prefix('account')->name('account.')->group(function () {
        Route::get('list', 'AccountController@list')->name('list');
        Route::get('{account_id}/information', 'AccountController@information')->name('information');
        Route::match(['get', 'post'], 'add', 'AccountController@add')->name('add');
        Route::match(['get', 'post'], 'update/{account_id}', 'AccountController@update')->name('update');
        Route::get('delete/{account_id}', 'AccountController@delete')->name('delete');
        Route::get('export', 'AccountController@export')->name('export');
    });

    // Màn hình Stores
    Route::prefix('stores')->name('stores.')->group(function () {
        Route::get('', 'StoresController@index')->name('index');
        Route::get('{store_id}/information', 'StoresController@information')->name('information');
        Route::match(['get', 'post'], 'add', 'StoresController@add')->name('add');
        Route::match(['get', 'post'], 'update/{store_id}', 'StoresController@update')->name('update');
        Route::get('delete/{store_id}', 'StoresController@delete')->name('delete');
    });

    // Màn hình Category
    Route::prefix('category')->name('category.')->group(function () {
        Route::get('', 'CategoryController@index')->name('index');
        Route::match(['get', 'post'], 'add', 'CategoryController@add')->name('add');
        Route::match(['get', 'post'], 'update/{id}', 'CategoryController@update')->name('update');
        Route::match(['get', 'post'], 'delete/{id}', 'CategoryController@delete')->name('delete');
        Route::prefix('{category_id}/product')->name('product.')->group(function () {
            Route::match(['get', 'post'], 'add', 'CategoryController@addNewProducts')->name('add');
            Route::get('', 'CategoryController@listOfProducts')->name('list');
        });
    });

    // Màn hình Product
    Route::prefix('product')->name('product.')->group(function () {
        Route::get('', 'ProductController@index')->name('index');
        Route::match(['get', 'post'], 'add', 'ProductController@add')->name('add');
        Route::match(['get', 'post'], '{product_id}/update', 'ProductController@update')->name('update');
        Route::get('{product_id}/delete', 'ProductController@delete')->name('delete');
    });

    // Màn hình Multimedia
    Route::prefix('product/{product_id}/multimedia')->name('multimedia.')->group(function () {
        Route::match(['get', 'post'], '', 'MultimediaController@index')->name('index');
        Route::match(['get', 'post'], 'delete', 'MultimediaController@delete')->name('chapter.delete');
    });

    // Màn hình Author
    Route::prefix('author')->name('author.')->group(function () {
        Route::get('', 'AuthorController@index')->name('index');
        Route::match(['get', 'post'], 'add', 'AuthorController@add')->name('add');
        Route::match(['get', 'post'], 'update/{author_id}', 'AuthorController@update')->name('update');
        Route::match(['get', 'post'], 'delete/{author_id}', 'AuthorController@delete')->name('delete');
    });

    Route::prefix('dev')->name('dev.')->group(function () {
        Route::get('sync-account-table-to-es', function () {
            Artisan::call('accounts:sync-to-es');
        });
    });

    Route::prefix('dev')->name('dev.')->group(function () {
        Route::get('sync-category-table-to-es', function () {
            Artisan::call('categories:sync-to-es');
        });
        Route::get('account-put-mapping-to-es', function () {
//            Account::createIndex($shards = null, $replicas = null);
//            Account::putMapping($ignoreConflicts = true);
//            Account::addAllToIndex();
            Account::deleteMapping();
        });
        Route::get('phpinfo', function () {
            phpinfo();
        });
    });

});
