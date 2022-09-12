<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FreelancerController;
use App\Http\Controllers\OrderController;
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
    Route::get('/', [FreelancerController::class, 'index']);
    Route::get('/{id}', [FreelancerController::class, 'show'])->where(['customer_id' => '[0-9+]']);
    Route::get('/create', [FreelancerController::class, 'createFreelancer']);
//    Route::delete('/{freelancer_id}', ['users' => 'FreelancerController@delete'])->where(['freelancer_id' => '[0-9+]']);
//    Route::put('/{freelancer_id}', ['users' => 'FreelancerController@update'])->where(['freelancer_id' => '[0-9+]']);
});

Route::prefix('/customers')->group(function () {
    Route::get('/', [CustomerController::class, 'index']);
    Route::get('/{id}', [CustomerController::class, 'show'])->where(['customer_id' => '[0-9+]']);
    Route::get('/create', [FreelancerController::class, 'createCustomer']);
//    Route::delete('/{customer_id}', ['uses' => 'CustomerController@delete'])->where(['customer_id' => '[0-9+]']);
//    Route::put('/{customer_id}', ['uses' => 'CustomerController@updateCustomer'])->where(['customer_id' => '[0-9+]']);
});

Route::prefix('/orders')->group(function () {
    Route::get('/', [OrderController::class, 'index']);
    Route::get('/{id}', [OrderController::class, 'show'])->where(['customer_id' => '[0-9+]']);
    Route::get('/create', [FreelancerController::class, 'createOrder']);
//    Route::delete('/{order_id}', ['uses' => 'OrderController@delete'])->where(['order_id' => '[0-9+]']);
//    Route::put('/{order_id}', ['uses' => 'OrderController@updateOrder'])->where(['order_id' => '[0-9+]']);
});

Route::prefix('/applications')->group(function () {
    Route::get('/', [ApplicationController::class, 'index']);
    Route::get('/{id}', [ApplicationController::class, 'show'])->where(['customer_id' => '[0-9+]']);
    Route::get('/create', [FreelancerController::class, 'createApplication']);
//    Route::delete('/{order_id}', ['uses' => 'AplicationController@delete'])->where(['order_id' => '[0-9+]']);
//    Route::put('/{order_id}', ['uses' => 'ApplicationController@updateApplication'])->where(['order_id' => '[0-9+]']);
});
