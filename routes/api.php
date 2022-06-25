<?php

// use App\Http\Controllers\Api\Auth\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

route::post('getCode', 'Auth\LoginController@getCode');
route::post('login', 'Auth\LoginController@loginByCode');
route::post('register', Auth\RegisterController::class);

Route::middleware('auth:api')->post('logout', function (Request $request) {

    if (auth()->user()) {
        $user = auth()->user();
        $user->api_token = null; // clear api token
        $user->code = '';
        $user->save();

        return response()->json([
            'message' => 'Thank you for using our application',
        ]);
    }

    return response()->json([
        'error' => 'Unable to logout user',
        'code' => 401,
    ], 401);
});

Route::group(['middleware' => 'auth:api', 'namespace' => 'Client'], function () {
    Route::get('profile', 'ProfileController@show');
    Route::post('profile/update', 'ProfileController@update');
});
