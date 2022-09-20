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
    Route::get('/{id}', [FreelancerController::class, 'show']);
    Route::post('/create', [FreelancerController::class, 'createFreelancer']);
    Route::delete('/delete/{id}', [FreelancerController::class, 'delete']);
    Route::put('/update/{id}', [FreelancerController::class, 'updateFreelancer']);
});

Route::prefix('/customers')->group(function () {
    Route::get('/', [CustomerController::class, 'index']);
    Route::get('/{id}', [CustomerController::class, 'show']);
    Route::post('/create', [CustomerController::class, 'createCustomer']);
    Route::delete('/delete/{id}', [CustomerController::class, 'delete']);
    Route::put('/update/{id}', [CustomerController::class, 'updateCustomer']);
});

Route::prefix('/orders')->group(function () {
    Route::get('/', [OrderController::class, 'index']);
    Route::get('/{id}', [OrderController::class, 'show']);
    Route::post('/create', [OrderController::class, 'createOrder']);
    Route::delete('/delete/{id}', [OrderController::class, 'delete']);
    Route::put('/update/{id}', [OrderController::class, 'updateOrder']);
});

Route::prefix('/applications')->group(function () {
    Route::get('/', [ApplicationController::class, 'index']);
    Route::get('/{id}', [ApplicationController::class, 'show']);
    Route::post('/create', [ApplicationController::class, 'createApplication']);
    Route::delete('/delete/{id}', [ApplicationController::class, 'delete']);
    Route::put('/update/{id}', [ApplicationController::class, 'updateApplication']);
});
