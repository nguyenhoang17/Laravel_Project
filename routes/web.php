<?php

use App\Http\Controllers\Frontend\HomeController;
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
    // return view('welcome');

    return view('backend.dashboard');
});

Route::name('frontend.')-> namespace('Frontend')-> group(function(){
    //Home
        Route::get('/','HomeController@index' )-> name('home');
    //ProductByCategory
        Route::get('/productsByCategory/{id}','ProductsByCategoryController@productByCategory' )-> name('product.category');
    //ProductDetail
        Route::get('/productDetail/{id}','ProductDetailController@productDetail' )-> name('product.detail');
    //Cart
        Route::get('/carts/index','CartController@index')->name('carts.index');
        Route::get('/carts/add/{id}','CartController@add')->name('carts.add');
        
});

Route::prefix('backend')-> name('backend.')-> namespace('Backend')-> group(function(){
    //Dasboard
        Route::get('dashboard','DashboardController@index');
    //Category
        Route::prefix('categories')-> name('categories.')-> group(function(){
            Route::get('/','CategoryController@index')-> name('index');
            // Route::get('/{id}','CategoryController@show')-> name('show');
            Route::get('/create','CategoryController@create')-> name('create');
            Route::post('/','CategoryController@store')-> name('store');
            Route::get('/{id}/edit','CategoryController@edit')-> name('edit');
            Route::put('/{id}','CategoryController@update')-> name('update');
            Route::delete('/{id}', 'CategoryController@destroy')-> name('destroy');
        });
    //Products
    Route::prefix('products')-> name('products.')-> group(function(){
        Route::get('/','ProductController@index')-> name('index');
        // Route::get('/{id}','CategoryController@show')-> name('show');
        Route::get('/create','ProductController@create')-> name('create');
        Route::post('/','ProductController@store')-> name('store');
        Route::get('/{id}/edit','ProductController@edit')-> name('edit');
        Route::put('/{id}','ProductController@update')-> name('update');
        Route::delete('/{id}', 'ProductController@destroy')-> name('destroy');
    });

     //Users
     Route::prefix('users')-> name('users.')-> group(function(){
        Route::get('/','UserController@index')-> name('index');
        Route::get('/{id}/edit','UserController@edit')-> name('edit');
        Route::put('/{id}','UserController@update')-> name('update');
        Route::delete('/{id}', 'UserController@destroy')-> name('destroy');
    });

        
});
//Auth
Route::prefix('/') -> namespace('Auth') -> name('auth.')-> group(function(){
    Route::get('/register', 'RegisterUserController@create')
    -> middleware('guest')
    -> name('register');
    Route::post('/register', 'RegisterUserController@store')
    -> middleware('guest');

    Route::get('/login', 'LoginController@create')
    -> middleware('guest')
    -> name('login');
    Route::post('/login', 'LoginController@authenticate')
    -> middleware('guest')
    -> name('login');

    Route::post('/logout','LoginController@logout')
    -> name('logout');
});
