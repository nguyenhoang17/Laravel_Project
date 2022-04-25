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
        Route::get('/productsByCategory','ProductsByCategoryController@index' )-> name('product.category');
    //ProductDetail
        Route::get('/productDetail','ProductDetailController@index' )-> name('product.detail');
        
});

Route::prefix('backend')-> name('backend.')-> namespace('Backend')-> group(function(){
    //Dasboard
        Route::get('dashboard','DashboardController@index');

        Route::prefix('categories')-> name('categories.')-> group(function(){
            Route::get('/','CategoryController@index')-> name('index');
            // Route::get('/{id}','CategoryController@show')-> name('show');
            Route::get('/create','CategoryController@create')-> name('create');
            Route::post('/','CategoryController@store')-> name('store');
            Route::get('/{id}/edit','CategoryController@edit')-> name('edit');
            Route::put('/{id}','CategoryController@update')-> name('update');
            Route::delete('/{id}', 'CategoryController@destroy')-> name('destroy');
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
