<?php

use Illuminate\Http\Request;

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
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/
Route::group(['middleware' => ['guest:api']], function () {
    Route::post('login', 'Api\AuthController@login');
    Route::post('signup', 'Api\AuthController@signup');
    Route::get('verify-email/{id}/{hash}', 'Api\VerificationController@verify')->name('verification.verify');
});
Route::group(['middleware' => 'auth:api'], function() {
    Route::get('resend-email-verification', 'Api\VerificationController@resend');
    Route::get('logout', 'Api\AuthController@logout');
    Route::get('getuser', 'Api\AuthController@getUser');
    Route::get('getusers', 'Api\AuthController@getUsers');
});
