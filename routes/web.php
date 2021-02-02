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


Auth::routes();
Route::get('/', 'HomeController@index')->name('mainpage');
Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function() {







    Route::get('/', 'DashboardController@index')->name('admin.index');
    Route::any('/statistics', 'StatisticController@index')->name('admin.statistics');
    Route::post('/upload', 'DashboardController@upload')->name('admin.upload');



//    Route::get('/orders', 'OrdersController@index')->name('admin.orders.index');







//    Route::resource('users', 'UsersController', [
//
//        'names' => [
//
//            'index' => 'admin.users.index',
//
//            'store' => 'admin.users.store',
//
//            'create' => 'admin.users.create',
//
//            'destroy' => 'admin.users.destroy',
//
//            'update' => 'admin.users.update',
//
//            'show' => 'admin.users.show',
//
//            'edit' => 'admin.users.edit',
//
//        ]
//
//    ]);





    Route::resource('products', 'ProductController', [

        'names' => [

            'index' => 'admin.products.index',

            'store' => 'admin.products.store',

            'create' => 'admin.products.create',

            'destroy' => 'admin.products.destroy',

            'update' => 'admin.products.update',

            'show' => 'admin.products.show',

            'edit' => 'admin.products.edit',

        ]

    ]);



    Route::resource('categories', 'CategoryController', [

        'names' => [

            'index' => 'admin.categories.index',

            'store' => 'admin.categories.store',

            'create' => 'admin.categories.create',

            'destroy' => 'admin.categories.destroy',

            'update' => 'admin.categories.update',

            'show' => 'admin.categories.show',

            'edit' => 'admin.categories.edit',

        ]

    ]);



    Route::resource('brands', 'BrandController', [

        'names' => [

            'index' => 'admin.brands.index',

            'store' => 'admin.brands.store',

            'create' => 'admin.brands.create',

            'destroy' => 'admin.brands.destroy',

            'update' => 'admin.brands.update',

            'show' => 'admin.brands.show',

            'edit' => 'admin.brands.edit',

        ]

    ]);





    Route::resource('systems', 'SystemController', [

        'names' => [

            'index' => 'admin.systems.index',

            'store' => 'admin.systems.store',

            'create' => 'admin.systems.create',

            'destroy' => 'admin.systems.destroy',

            'update' => 'admin.systems.update',

            'show' => 'admin.systems.show',

            'edit' => 'admin.systems.edit',

        ]

    ]);


    Route::resource('services', 'ServiceController', [

        'names' => [

            'index' => 'admin.services.index',

            'store' => 'admin.services.store',

            'create' => 'admin.services.create',

            'destroy' => 'admin.services.destroy',

            'update' => 'admin.services.update',

            'show' => 'admin.services.show',

            'edit' => 'admin.services.edit',

        ]

    ]);
    Route::resource('blogs', 'BlogController', [

        'names' => [

            'index' => 'admin.blogs.index',

            'store' => 'admin.blogs.store',

            'create' => 'admin.blogs.create',

            'destroy' => 'admin.blogs.destroy',

            'update' => 'admin.blogs.update',

            'show' => 'admin.blogs.show',

            'edit' => 'admin.blogs.edit',

        ]

    ]);

    Route::resource('clients', 'ClientController', [

        'names' => [

            'index' => 'admin.clients.index',

            'store' => 'admin.clients.store',

            'create' => 'admin.clients.create',

            'destroy' => 'admin.clients.destroy',

            'update' => 'admin.clients.update',

            'show' => 'admin.clients.show',

            'edit' => 'admin.clients.edit',

        ]

    ]);



});
