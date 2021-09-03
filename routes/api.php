<?php

use App\Http\Controllers\CustomerController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Get all customers //http://127.0.0.1:8000/api/customers
Route::get('customers',[CustomerController::class,'getCustomer']);

//Get Specific customer detail //http://127.0.0.1:8000/api/customer/2
Route::get('customer/{id}',[CustomerController::class,'getCustomerById']);

//Add customer //
Route::post('addCustomer', [CustomerController::class,'addCustomer']);

//Update customer
Route::put('updateCustomer/{id}', [CustomerController::class,'updateCustomer']);

//Delete customer
Route::delete('deleteCustomer/{id}',[CustomerController::class,'deleteCustomer']);
