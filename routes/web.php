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
    return view('welcome');
});


Route::group([
    'prefix'    => 'dash',
    'namespace' => 'Dashboard',
    //'middleware' => ['auth','role:user'],

], function() {
    
    Route::get('/', 'DashboardController@index')->name('dashboard');

    ROute::resource('users'           , 'UserController');
    Route::get('admins'               , 'UserController@indexAdmin')->name('admin.index');
    Route::resource('products'        , 'ProductController');
    Route::PUT('updateImage'          , 'ProductController@updateImage')->name('product.updateImage');
    Route::resource('car_category'    , 'CarCategoryController');
    Route::resource('type_category'   , 'TypeCategoryController');
    Route::resource('filter_category' , 'FilterCategoryController');
});






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
