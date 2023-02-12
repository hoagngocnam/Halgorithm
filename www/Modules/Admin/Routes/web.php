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

    // Màn hình Cửa hàng
    Route::prefix('shop')->name('shop.')->group(function () {
        Route::get('list', 'ShopController@list')->name('list');
        Route::get('{shop_id}/information', 'ShopController@information')->name('information');
        Route::get('add', 'ShopController@add')->name('add');
        Route::post('add', 'ShopController@handleAdd')->name('add');
        Route::get('update/{shop_id}', 'ShopController@formUpdate')->name('update')->where('shop_id', '[0-9]+');
        Route::post('update/{shop_id}', 'ShopController@handleUpdate')->name('update')->where('shop_id', '[0-9]+');
        Route::get('delete/{shop_id}', 'ShopController@delete')->name('delete')->where('shop_id', '[0-9]+');
    });

    // Màn hình Category
    Route::prefix('category')->name('category.')->group(function () {
        Route::get('list', 'CategoryController@list')->name('list');
        Route::get('add', 'CategoryController@add')->name('add');
        Route::post('add', 'CategoryController@handleAdd')->name('add');
        Route::get('update/{category_id}', 'CategoryController@formUpdate')->name('update')->where('id', '[0-9]+');
        Route::post('update/{category_id}', 'CategoryController@handleUpdate')->name('update')->where('id', '[0-9]+');
        Route::get('delete/{category_id}', 'CategoryController@delete')->name('delete');
    });

    // Màn hình Product
    Route::prefix('product')->name('product.')->group(function () {
        Route::get('list', 'ProductController@list')->name('list');
        Route::get('add', 'ProductController@add')->name('add');
        Route::post('add', 'ProductController@handleAdd')->name('add');
        Route::get('update/{category_id}', 'ProductController@formUpdate')->name('update')->where('id', '[0-9]+');
        Route::post('update/{category_id}', 'ProductController@handleUpdate')->name('update')->where('id', '[0-9]+');
        Route::get('delete/{category_id}', 'ProductController@delete')->name('delete');
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
