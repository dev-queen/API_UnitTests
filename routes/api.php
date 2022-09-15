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
    Route::get('/{id}', [FreelancerController::class, 'show'])->where(['id' => '[0-9+]']);
    Route::post('/create', [FreelancerController::class, 'createFreelancer']);
    Route::delete('/{id}', [FreelancerController::class, 'delete'])->where(['id' => '[0-9+]']);
    Route::put('/update/{id}', [FreelancerController::class, 'updateFreelancer'])->where(['id' => '[0-9+]']);
});

Route::prefix('/customers')->group(function () {
    Route::get('/', [CustomerController::class, 'index']);
    Route::get('/{id}', [CustomerController::class, 'show'])->where(['id' => '[0-9+]']);
    Route::post('/create', [CustomerController::class, 'createCustomer']);
    Route::delete('/{id}', [CustomerController::class, 'delete'])->where(['id' => '[0-9+]']);
    Route::put('/update/{id}', [CustomerController::class, 'updateCustomer'])->where(['id' => '[0-9+]']);
});

Route::prefix('/orders')->group(function () {
    Route::get('/', [OrderController::class, 'index']);
    Route::get('/{id}', [OrderController::class, 'show'])->where(['id' => '[0-9+]']);
    Route::post('/create', [OrderController::class, 'createOrder']);
    Route::delete('/{id}', [OrderController::class, 'delete'])->where(['id' => '[0-9+]']);
    Route::put('/update/{id}', [OrderController::class, 'updateOrder'])->where(['id' => '[0-9+]']);
});

Route::prefix('/applications')->group(function () {
    Route::get('/', [ApplicationController::class, 'index']);
    Route::get('/{id}', [ApplicationController::class, 'show'])->where(['id' => '[0-9+]']);
    Route::post('/create', [ApplicationController::class, 'createApplication']);
    Route::delete('/{id}', [ApplicationController::class, 'delete'])->where(['id' => '[0-9+]']);
    Route::put('/update/{id}', [ApplicationController::class, 'updateApplication'])->where(['id' => '[0-9+]']);
});
