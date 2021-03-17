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

Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});
//Auth::routes();
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::get('portexcel', 'ExcelController@index')->name('portexcel');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/category/{url}', 'HomeController@category')->name('category');
Route::get('/', 'HomeController@index')->name('mainpage');
Route::get('/systems', 'HomeController@systems')->name('systems');
Route::get('/blogs', 'HomeController@blogs')->name('blogs');
Route::get('/blog/{url}', 'HomeController@blog')->name('blog');
Route::get('/get-blog', 'HomeController@getBlogs')->name('getBlogs');
Route::get('/get-portfolios', 'HomeController@getPortfolios')->name('getPortfolios');
Route::get('/company', 'HomeController@company')->name('company');
Route::get('/categories', 'HomeController@categories')->name('categories');
Route::get('/portfolios', 'HomeController@portfolios')->name('portfolios');
Route::get('/portfolio/{url}', 'HomeController@portfolioSingle')->name('portfolio');
Route::get('/product/{url}', 'HomeController@product')->name('product');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::post('/contact', 'HomeController@postContact')->name('postContact');
Route::get('/system/{url}', 'HomeController@system')->name('system');


Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function() {
    Route::get('/', 'DashboardController@index')->name('admin.index');
    Route::get('/contacts', 'DashboardController@contacts')->name('admin.contacts');
    Route::any('/statistics', 'StatisticController@index')->name('admin.statistics');
    Route::any('/slider', 'SliderController@index')->name('admin.slider');
    Route::post('/slider', 'SliderController@update')->name('admin.slider.update');
    Route::post('/upload', 'DashboardController@upload')->name('admin.upload');
    Route::any('/about', 'AboutController@index')->name('admin.about');



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

    Route::resource('sliders', 'SliderImageController', [

        'names' => [

            'index' => 'admin.sliders.index',

            'store' => 'admin.sliders.store',

            'create' => 'admin.sliders.create',

            'destroy' => 'admin.sliders.destroy',

            'update' => 'admin.sliders.update',

            'show' => 'admin.sliders.show',

            'edit' => 'admin.sliders.edit',

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

    Route::resource('portfolios', 'PortfolioController', [

        'names' => [

            'index' => 'admin.portfolios.index',

            'store' => 'admin.portfolios.store',

            'create' => 'admin.portfolios.create',

            'destroy' => 'admin.portfolios.destroy',

            'update' => 'admin.portfolios.update',

            'show' => 'admin.portfolios.show',

            'edit' => 'admin.portfolios.edit',

        ]

    ]);

    Route::resource('cities', 'CityController', [

        'names' => [

            'index' => 'admin.cities.index',

            'store' => 'admin.cities.store',

            'create' => 'admin.cities.create',

            'destroy' => 'admin.cities.destroy',

            'update' => 'admin.cities.update',

            'show' => 'admin.cities.show',

            'edit' => 'admin.cities.edit',

        ]

    ]);

    Route::resource('social_networks', 'SotialNetworkController', [

        'names' => [

            'index' => 'admin.social_networks.index',

            'store' => 'admin.social_networks.store',

            'create' => 'admin.social_networks.create',

            'destroy' => 'admin.social_networks.destroy',

            'update' => 'admin.social_networks.update',

            'show' => 'admin.social_networks.show',

            'edit' => 'admin.social_networks.edit',

        ]

    ]);
    Route::resource('contact_services', 'ContactServiceController', [

        'names' => [

            'index' => 'admin.contact_services.index',

            'store' => 'admin.contact_services.store',

            'create' => 'admin.contact_services.create',

            'destroy' => 'admin.contact_services.destroy',

            'update' => 'admin.contact_services.update',

            'show' => 'admin.contact_services.show',

            'edit' => 'admin.contact_services.edit',

        ]

    ]);
    Route::resource('certificates', 'CertificateController', [

        'names' => [

            'index' => 'admin.certificates.index',

            'store' => 'admin.certificates.store',

            'create' => 'admin.certificates.create',

            'destroy' => 'admin.certificates.destroy',

            'update' => 'admin.certificates.update',

            'show' => 'admin.certificates.show',

            'edit' => 'admin.certificates.edit',

        ]

    ]);
    Route::resource('histories', 'HistoryController', [

        'names' => [

            'index' => 'admin.histories.index',

            'store' => 'admin.histories.store',

            'create' => 'admin.histories.create',

            'destroy' => 'admin.histories.destroy',

            'update' => 'admin.histories.update',

            'show' => 'admin.histories.show',

            'edit' => 'admin.histories.edit',

        ]

    ]);



});

Route::get('/{url}', function (){
    return view('errors.404');
});