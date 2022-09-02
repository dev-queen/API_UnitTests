<?php

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::prefix('/freelancers')->group(function () {
    Route::get('/', ['users' => 'FreelancerController@getFreelancers']);
    Route::get('/{freelance_name}', ['users' => 'FreelancerController@get']);
    Route::post('/', ['users' => 'FreelancerController@create']);
    Route::delete('/{freelancer_id}', ['users' => 'FreelancerController@delete'])->where(['freelancer_id' => '[0-9+]']);
    Route::put('/{freelancer_id}', ['users' => 'FreelancerController@update'])->where(['freelancer_id' => '[0-9+]']);
});

Route::prefix('/customers')->group(function () {
    Route::get('/', ['uses' => 'CustomerController@get']);
    Route::get('/{customer_id}', ['uses' => 'CustomerController@detail'])->where(['customer_id' => '[0-9+]']);
    Route::post('/', ['uses' => 'CustomerController@createCustomer']);
    Route::delete('/{customer_id}', ['uses' => 'CustomerController@delete'])->where(['customer_id' => '[0-9+]']);
    Route::put('/{customer_id}', ['uses' => 'CustomerController@updateCustomer'])->where(['customer_id' => '[0-9+]']);
});

Route::prefix('/orders')->group(function () {
    Route::get('/', ['uses' => 'OrderController@get']);
    Route::get('/{order_id}', ['uses' => 'OrderController@detail'])->where(['order_id' => '[0-9+]']);
    Route::post('/', ['uses' => 'OrderController@createOrder']);
    Route::delete('/{order_id}', ['uses' => 'OrderController@delete'])->where(['order_id' => '[0-9+]']);
    Route::put('/{order_id}', ['uses' => 'OrderController@updateOrder'])->where(['order_id' => '[0-9+]']);
});

Route::prefix('/applications')->group(function () {
    Route::get('/', ['uses' => 'ApplicationController@get']);
    Route::get('/{order_id}', ['uses' => 'ApplicationController@detail'])->where(['order_id' => '[0-9+]']);
    Route::post('/', ['uses' => 'ApplicationController@createApplication']);
    Route::delete('/{order_id}', ['uses' => 'AplicationController@delete'])->where(['order_id' => '[0-9+]']);
    Route::put('/{order_id}', ['uses' => 'ApplicationController@updateApplication'])->where(['order_id' => '[0-9+]']);
});
