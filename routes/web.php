<?php

use App\Models\Role;
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
    return redirect('/dash');
});

Route::get('home', function () {
    return redirect('/dash');
});


Route::group([
    'prefix'    => 'dash',
    'namespace' => 'Dashboard',
    'middleware' => ['auth','role:admin'],

], function() {
    
    Route::get('/', 'DashboardController@index')->name('dashboard');

    ROute::resource('users'           , 'UserController');
    Route::get('admins'               , 'UserController@indexAdmin')->name('admin.index');
    Route::resource('products'        , 'ProductController');
    Route::POST('insertImage'          , 'ProductController@insertImage')->name('products.insertImage');
    Route::PUT('deleteImage'          , 'ProductController@deleteImage')->name('product.deleteImage');
    Route::resource('car_category'    , 'CarCategoryController');
    Route::resource('type_category'   , 'TypeCategoryController');
    Route::resource('filter_category' , 'FilterCategoryController');
    //Route::resource('charts' , 'ChartController');
    Route::resource('orders' , 'MainOrderController');
});






Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
  ]);

